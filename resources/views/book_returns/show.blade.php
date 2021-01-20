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
                            <button class="btn btn-success btn-sm" type="submit">Complete Payment</button>
                          </p>
                      </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{
    !config('services.midtrans.isProduction') ? 'https://app.sandbox.midtrans.com/snap/snap.js' : 'https://app.midtrans.com/snap/snap.js' }}"
    data-client-key="{{ config('services.midtrans.clientKey')
}}"></script>
<script>
    $("book_list").submit(function(event) {
        event.preventDefault();
        $.post("/api/book_return", {
            _method: 'POST',
            _token: '{{ csrf_token() }}',
            NIM: $('input#donor_name').val(),

            Barcode: $('input#donor_email').val(),
            Info_Buku: $('select#donation_type').val(),
            amount: $('input#amount').val(),
            note: $('textarea#note').val(),
        },
        function (data, status) {
            console.log(data);
            snap.pay(data.snap_token, {
                // Optional
                onSuccess: function (result) {
                    location.reload();
                },
                // Optional
                onPending: function (result) {
                    location.reload();
                },
                // Optional
                onError: function (result) {
                    location.reload();
                }
            });
            return false;
        });
    })
</script>
@endsection
