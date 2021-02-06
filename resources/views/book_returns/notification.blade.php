@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID_Pembayaran</th>
                                        <th>Tanggal_Pemmbayaran</th>
                                        <th>Status</th>
                                        <th>Tanggal Pengembalian</th>
                                    </tr>
                                </thead>
                            <tbody>
                                        <tr>
                                            <td>{{ $riwayat->ID_Pembayaran}}</td>
                                            <td>{{ $riwayat->updated_at }}</td>
                                            <td>{{ $riwayat->status }}</td>
                                            <td>
                                                <a class="badge badge-secondary" href="{{'/home'}}">Kembali</a>
                                            </td>
                                        </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
