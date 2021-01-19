<?php

namespace App\Http\Controllers;

use App\Book;
use App\book_return;
use App\User;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class BookReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $book = book_return::all();
        return view('home', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book_return $book)
    {
        return view('book_returns.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function doCheckout(book_return $book)
    {
        $params = $book->except('_token');

		$order = DB::transaction(
			function () use ($params) {
				$order = $this->_saveOrder($params);
				$this->_saveOrderItems($order);
				$this->_generatePaymentToken($order);

				return $order;
        }
    );

    return redirect('orders/checkout');

    }
    private function _generatePaymentToken(book_return $book)
	{
        $this->initPaymentGateway();
        $pembayar= User::all();

		$customerDetails = [
			'first_name' => $pembayar->name,
			'email' => $pembayar->email,
		];

		$params = [
			'enable_payments' => \App\Models\Payment::PAYMENT_CHANNELS,
			'transaction_details' => [
				'order_id' => $book->barcode,
				'gross_amount' => $book->Jumlah_Denda,
			],
			'customer_details' => $customerDetails,
			'expiry' => [
				'start_time' => date('Y-m-d H:i:s T'),
				'unit' => \App\Models\Payment::EXPIRY_UNIT,
				'duration' => \App\Models\Payment::EXPIRY_DURATION,
			],
		];

		$snap = \Midtrans\Snap::createTransaction($params);

		if ($snap->token) {
			$book->payment_token = $snap->token;
			$book->payment_url = $snap->redirect_url;
			$book->save();
		}
    }
    private function _saveOrder($book)
	{
		$tgl_pembayaran = date('Y-m-d H:i:s');
		$paymentDue = (new \DateTime($tgl_pembayaran))->modify('+7 day')->format('Y-m-d H:i:s');

		$orderParams = [
			'user_id' => User::user()->id,
			'code' => book_return::generateCode(),
			'status' => book_return::CREATED,
			'order_date' => $tgl_pembayaran,
			'payment_due' => $paymentDue,
			'payment_status' => book_return::UNPAID,
			'grand_total' => $book->Jumlah_Denda,
		];

		return book_return::create($orderParams);
	}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, book_return $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book_return $book)
    {
        //
    }
    public static function generateCode()
	{
		$dateCode = self::ORDERCODE . '/' . date('Ymd') . '/' .\General::integerToRoman(date('m')). '/' .\General::integerToRoman(date('d')). '/';

		$lastOrder = self::select([DB::raw('MAX(orders.code) AS last_code')])
			->where('code', 'like', $dateCode . '%')
			->first();

		$lastOrderCode = !empty($lastOrder) ? $lastOrder['last_code'] : null;

		$orderCode = $dateCode . '00001';
		if ($lastOrderCode) {
			$lastOrderNumber = str_replace($dateCode, '', $lastOrderCode);
			$nextOrderNumber = sprintf('%05d', (int)$lastOrderNumber + 1);

			$orderCode = $dateCode . $nextOrderNumber;
		}

		if (self::_isOrderCodeExists($orderCode)) {
			return generateOrderCode();
		}

		return $orderCode;
	}
}
