<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book_return extends Model
{
    //
    protected $table='book_returns';
    protected $fillable = ['NIM', 'name', 'Jurusan_Fakultas', 'Angkatan', 'Barcode','Tanggal_Peminjaman','Tanggal_Pengembalian','Jumlah_Denda','created_at','payment_url','payment_token','Info_Buku', 'user_id','book_id','updated_at'];
    public function isPaid()
	{
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function book()
    {
        return $this->hasMany(book::class);
    }
}
