@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Rincian Pembayaran</div>
                <div class="card">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item" id="book_list">
                          <p>{{$book->NIM}}</p>
                          <p>{{$book->Barcode}}</p>
                          <p>{{$book->Info_Buku}}</p>
                          <p>{{$book->Tanggal_Peminjaman}}</p>
                          <p>{{$book->Tanggal_Pengembalian}}</p>
                          <p>{{$book->Jumlah_Denda}}</p>
                          <p>
                            <a href="{{ $book->payment_url }}">Proceed to payment</a>
                          </p>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
