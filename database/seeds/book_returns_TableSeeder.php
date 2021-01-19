<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book_returns_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_returns')->insert([
            [
            'NIM'=>'1101174232',
            'Barcode'=> '1234567890',
            'Info_Buku'=> 'Buku Pertama',
            'Tanggal_Peminjaman'=>'2021-01-10 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-15 16:55:59',
            'Jumlah_Denda'=> '25000'
            ],[
            'NIM'=>'1101174100',
            'Barcode'=> 'UIBJ8328942',
            'Info_Buku'=> 'Buku Kedua',
            'Tanggal_Peminjaman'=>'2021-01-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-13 16:55:59',
            'Jumlah_Denda'=> '30000'

            ]

        ]);
    }
}
