<?php

namespace App\Http\Controllers;

use App\Payment;
use Auth;
use App\User;
use App\book_return;
use App\RiwayatPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification(Request $request)
    {
    }

    public function finish(Request $request)
    {
        $riwayat = RiwayatPembayaran::all();
        if($request->query('status_code')=='200'){
            $riwayat = new RiwayatPembayaran();
            $riwayat->Nama = Auth::user()->name;
            $riwayat->user_id = Auth::user()->id;
            $riwayat->ID_Pembayaran = $request->query('order_id');
            $riwayat->status = 'LUNAS';
            $riwayat->save();
        }
        else{
            $riwayat = new RiwayatPembayaran();
            $riwayat->Nama = Auth::user()->name;
            $riwayat->user_id = Auth::user()->id;
            $riwayat->ID_Pembayaran = $request->query('order_id');
            $riwayat->status = 'BELUM LUNAS';
            $riwayat->save();
        }
        book_return::where('ID_Pembayaran','=',$riwayat->ID_Pembayaran)->delete();
        $data = array(
            'name'=> Auth::user()->name,
            'email_body'=>Auth::user()->email

        );
        $riwayat1 = $riwayat->toArray();
        Mail::send('email_template', $riwayat1, function ($message){
            $message->from('tnurhikmah208@gmail.com', 'TUGAS AKHIR')->subject("HI");
            $message->to(Auth::user()->email, Auth::user()->name);
        });
        return view('book_returns.notification', compact('riwayat'));
    }
}
