<?php

namespace App\Http\Controllers;

use App\Payment;
use App\book_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification(Request $request)
    {
        $payload = $request->getContent();
		$notification = json_decode($payload);

		$validSignatureKey = hash("sha512", $notification->order_id . $notification->status_code . $notification->gross_amount . config('services.midtrans.serverKey'));

		if ($notification->signature_key != $validSignatureKey) {
			return response(['message' => 'Invalid signature'], 403);
		}

		$this->initPaymentGateway();
		$statusCode = null;
        $paymentNotification = new \Midtrans\Notification();
		$book = book_return::where('Barcode', $paymentNotification->order_id)->firstOrFail();

		if ($book->isPaid()) {
			return response(['message' => 'The order has been paid before'], 422);
		}

		$transaction = $paymentNotification->transaction_status;
		$type = $paymentNotification->payment_type;
		$orderId = $paymentNotification->order_id;
		$fraud = $paymentNotification->fraud_status;

		$vaNumber = null;
		$vendorName = null;
		if (!empty($paymentNotification->va_numbers[0])) {
			$vaNumber = $paymentNotification->va_numbers[0]->va_number;
			$vendorName = $paymentNotification->va_numbers[0]->bank;
		}

		$paymentStatus = null;
		if ($transaction == 'capture') {
			// For credit card transaction, we need to check whether transaction is challenge by FDS or not
			if ($type == 'echannel') {
				if ($fraud == 'challenge') {
					// TODO set payment status in merchant's database to 'Challenge by FDS'
					// TODO merchant should decide whether this transaction is authorized or not in MAP
					$paymentStatus = payment::CHALLENGE;
				} else {
					// TODO set payment status in merchant's database to 'Success'
					$paymentStatus = payment::SUCCESS;
				}
			}
		} else if ($transaction == 'settlement') {
			// TODO set payment status in merchant's database to 'Settlement'
			$paymentStatus = payment::SETTLEMENT;
		} else if ($transaction == 'pending') {
			// TODO set payment status in merchant's database to 'Pending'
			$paymentStatus = payment::PENDING;
		} else if ($transaction == 'deny') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = payment::DENY;
		} else if ($transaction == 'expire') {
			// TODO set payment status in merchant's database to 'expire'
			$paymentStatus = payment::EXPIRE;
		} else if ($transaction == 'cancel') {
			// TODO set payment status in merchant's database to 'Denied'
			$paymentStatus = payment::CANCEL;
		}

		$paymentParams = [
			'order_id' => $book->id,
			'number' => $book->Barcode,
			'amount' => $paymentNotification->gross_amount,
			'method' => 'midtrans',
			'status' => $paymentStatus,
			'token' => $paymentNotification->transaction_id,
			'payloads' => $payload,
			'payment_type' => $paymentNotification->payment_type,
			'va_number' => $vaNumber,
			'vendor_name' => $vendorName,
			'biller_code' => $paymentNotification->biller_code,
			'bill_key' => $paymentNotification->bill_key,
		];

        $payment = payment::create($paymentParams);

		if ($paymentStatus && $payment) {
			DB::transaction(
				function () use ($book, $payment) {
					if (in_array($payment->status, [payment::SUCCESS, payment::SETTLEMENT])) {
						$book->payment_status = book_return::PAID;
						$book->status = book_return::CONFIRMED;
						$book->save();
					}
				}
			);
		}

		$message = 'Payment status is : '. $paymentStatus;

		$response = [
			'code' => 200,
			'message' => $message,
		];

		return response($response, 200);
    }

    public function finish(Request $request)
    {
        $code = $request->query('Barcode');
        return view('book_returns.notification');
    }

    public function unfinish(Request $request)
    {

    }

    public function failed(Request $request)
    {

    }
}
