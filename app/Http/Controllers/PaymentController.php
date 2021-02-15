<?php

namespace App\Http\Controllers;

use Auth;
use Midtrans\Notification;
use App\book_return;
use App\RiwayatPembayaran;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\JsonResponse;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notification(Request $request)
    {
        $terima= $request->getContent();
        $kasih= json_decode($terima,false);
        $history = RiwayatPembayaran::all();
        if($kasih->status_code==200){
            $history = new RiwayatPembayaran();
            $history->ID_Pembayaran = $kasih->order_id;
            $history->status = 'LUNAS';
            $history->save();
        }
    }

    public function finish(Request $request)
    {
        //$request1= $request->statusCode();
        $riwayat = RiwayatPembayaran::all();
        $id= count($riwayat)-1;
        $riwayat[$id]->user_id= Auth::user()->id;
        $riwayat[$id]->Nama= Auth::user()->name;
        $riwayat[$id]->update();
        book_return::where('ID_Pembayaran','=',$riwayat[$id]->ID_Pembayaran)->delete();
        $data = array(
            'name'=> Auth::user()->name,
            'email_body'=>Auth::user()->email

        );
        $riwayat1 = json_decode($riwayat[$id],false);
        $riwayat2 = $riwayat[$id]->toArray();
        if($riwayat[$id]->status=='LUNAS'){
        Mail::send('email_template', $riwayat2, function ($message){
            $message->from('tnurhikmah208@gmail.com', 'TUGAS AKHIR')->subject("HI");
            $message->to(Auth::user()->email, Auth::user()->name);
        });
        }
        return view('book_returns.notification', compact('riwayat1'));
    }
}
