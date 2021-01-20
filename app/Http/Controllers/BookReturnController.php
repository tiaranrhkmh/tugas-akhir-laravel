<?php

namespace App\Http\Controllers;

use App\book_return;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class BookReturnController extends Controller
{
    protected $request;
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

    public function __construct(Request $request)
    {
        $this->request = $request;

        //Set midtrans configuration
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }

    public function doPayment($book)
    {
        DB::transaction(function () use ($book) {

            $payload = [
                'transaction_details' => [
                    'order_id'      => $book->Barcode,
                    'gross_amount'  => $book->Jumlah_Denda,
                ],
                'customer_details' => [
                    'first_name'    => $book->NIM,
                    'last_name'=> $book->name,
                    // 'phone'         => '08888888888',
                    // 'address'       => '',
                ]
            ];
            $snapToken = \Midtrans\Snap::getSnapToken($payload);
            $book->snap_token = $snapToken;
            $this->response['snap_token'] = $snapToken;
        });
        return response()->json($this->response);
    }
    public function notificationHandler(Request $request)
    {
        $notif = new \Midtrans\Notification();
        DB::transaction(function() use($notif) {

          $transaction = $notif->transaction_status;
          $type = $notif->payment_type;
          $orderId = $notif->order_id;
          $fraud = $notif->fraud_status;
          $donation = book_return::findOrFail($orderId);

          if ($transaction == 'capture') {

            // For credit card transaction, we need to check whether transaction is challenge by FDS or not
            if ($type == 'credit_card') {

              if($fraud == 'challenge') {
                // TODO set payment status in merchant's database to 'Challenge by FDS'
                // TODO merchant should decide whether this transaction is authorized or not in MAP
                // $donation->addUpdate("Transaction order_id: " . $orderId ." is challenged by FDS");
                $donation->setPending();
              } else {
                // TODO set payment status in merchant's database to 'Success'
                // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully captured using " . $type);
                $donation->setSuccess();
              }

            }

          } elseif ($transaction == 'settlement') {

            // TODO set payment status in merchant's database to 'Settlement'
            // $donation->addUpdate("Transaction order_id: " . $orderId ." successfully transfered using " . $type);
            $donation->setSuccess();

          } elseif($transaction == 'pending'){

            // TODO set payment status in merchant's database to 'Pending'
            // $donation->addUpdate("Waiting customer to finish transaction order_id: " . $orderId . " using " . $type);
            $donation->setPending();

          } elseif ($transaction == 'deny') {

            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is Failed.");
            $donation->setFailed();

          } elseif ($transaction == 'expire') {

            // TODO set payment status in merchant's database to 'expire'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is expired.");
            $donation->setExpired();

          } elseif ($transaction == 'cancel') {

            // TODO set payment status in merchant's database to 'Failed'
            // $donation->addUpdate("Payment using " . $type . " for transaction order_id: " . $orderId . " is canceled.");
            $donation->setFailed();

          }

        });

        return;
    }
}
