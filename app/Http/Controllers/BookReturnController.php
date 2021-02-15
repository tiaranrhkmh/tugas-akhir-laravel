<?php

namespace App\Http\Controllers;

use App\RiwayatPembayaran;
use book_return;
use Auth;
use Illuminate\Support\Facades\Hash;


class BookReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function _generatePaymentToken($id){
        $this->initPaymentGateway();
        $buku=Auth::user()->book_returns;
        $data_buku=$buku[$id];
        $data_buku->ID_Pembayaran = $data_buku->Barcode.'/'.$data_buku->Tanggal_Pengembalian.'/'.$data_buku->NIM;
        $data_buku->save();
        $customerDetails =[
            'first_name' =>Auth::user()->name,
            'last_name'=>Auth::user()->NIM,
            'email'=>Auth::user()->email
        ];
        $params =[
            'enable_payment'=>\App\Payment::PAYMENT_CHANNELS,
            'transaction_details'=>[
                'order_id'=>$data_buku->ID_Pembayaran,
                'gross_amount'=>$data_buku->Jumlah_Denda,
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
            $data_buku->payment_token= $snap->token;
            $data_buku->payment_url = $snap->redirect_url;
            $data_buku->save();
            $this->response['snap_token'] = $snap;
        }
        return response()->json($this->response);
    }
    public function index()
    {
        //
        $riwayat= RiwayatPembayaran::all();
        $buku=Auth::user()->book_returns;
        return view('book_returns.home', compact('buku'));
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
    public function show($id)
    {
        $this->_generatePaymentToken($id);
        $buku=Auth::user()->book_returns;
        $data_buku=$buku[$id];
        return view('book_returns.show',compact('data_buku'));
    }

}
