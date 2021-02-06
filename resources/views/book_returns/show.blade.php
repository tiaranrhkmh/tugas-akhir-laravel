@extends('layouts.app')

@section('content')
<div class="container">
    {{ csrf_field() }}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rincian Pembayaran</div>
                <div class="card">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="book_list">
                            <p>{{$data_buku->NIM}}</p>
                            <p>{{$data_buku->Barcode}}</p>
                            <p>{{$data_buku->Info_Buku}}</p>
                            <p>{{$data_buku->Tanggal_Peminjaman}}</p>
                            <p>{{$data_buku->Tanggal_Pengembalian}}</p>
                            <p>{{$data_buku->Jumlah_Denda}}</p>
                            <p>
                                <a href="{{$data_buku->payment_url}}" method='POST'>Proceed to payment</a>
                            </p>
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
