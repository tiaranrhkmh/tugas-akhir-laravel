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
                                        <th>No</th>
                                        <th>Barcode</th>
                                        <th>Judul Buku</th>
                                        <th>Tanggal Peminjaman</th>
                                        <th>Tanggal Pengembalian</th>
                                        <th>Jumlah Denda</th>
                                        <th></th>
                                    </tr>
                                </thead>
                            <tbody>

                                @foreach($buku as $key=>$value)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $value["Barcode"] }}</td>
                                            <td>{{ $value["Info_Buku"] }}</td>
                                            <td>{{ $value["Tanggal_Peminjaman"] }}</td>
                                            <td>{{ $value["Tanggal_Pengembalian"] }}</td>
                                            <td>{{ $value["Jumlah_Denda"] }}</td>
                                            <td>
                                                <a class="badge badge-secondary" href="{{route('book',$key)}}">Lakukan Pelunasan</a>
                                            </td>
                                @endforeach()
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
