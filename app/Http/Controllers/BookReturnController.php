<?php

namespace App\Http\Controllers;

use App\book_return;
use App\User;
use Illuminate\Auth;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;

class BookReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function _generatePaymentToken($book){
        $this->initPaymentGateway();
        $customerDetails =[
            'first_name' => $book->name,
            'last_name'=>$book->NIM,
        ];
        $params =[
            'enable_payment'=>\App\Payment::PAYMENT_CHANNELS,
            'transaction_details'=>[
                'order_id'=>$book->Barcode,
                'gross_amount'=>$book->Jumlah_Denda,
            ],
            'customer_details'=>$customerDetails,
            'expiry'=>[
                'start_time'=>date('Y-m-d H:i:s T'),
                'unit'=> \App\Payment::EXPIRY_UNIT,
                'duration'=>\App\Payment::EXPIRY_DURATION
            ]
        ];
        $snap = \Midtrans\Snap::createTransaction($params);
        if ($snap->token) {
			$book->payment_token = $snap->token;
			$book->payment_url = $snap->redirect_url;
			$book->save();
       }

    }
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
        $this->_generatePaymentToken($book);
        return view('book_returns.show',compact('book'));
    }
}
