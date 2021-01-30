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
            'name'=>'Tiara',
            'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi / FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/PTM/OPLIB/0001',
            'Info_Buku'=> 'Buku Pertama',
            'Tanggal_Peminjaman'=>'2021-01-10 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-15 16:55:59',
            'Jumlah_Denda'=> '25000'
            ],
            [
            'NIM'=>'1101174232',
            'name'=>'Tiara',
            'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KDA/OPLIB/0002',
            'Info_Buku'=> 'Buku Kedua',
            'Tanggal_Peminjaman'=>'2021-01-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-13 16:55:59',
            'Jumlah_Denda'=> '28000'

            ],
            [
            'NIM'=>'1101174232',
            'name'=>'Tiara',
            'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KDA/OPLIB/9892',
            'Info_Buku'=> 'Buku Ketiga',
            'Tanggal_Peminjaman'=>'2021-01-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-16 16:55:59',
            'Jumlah_Denda'=> '35000'

            ],
            [
            'NIM'=>'1101174232',
            'name'=>'Tiara',
            'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KDA/OPLIB/0283',
            'Info_Buku'=> 'Buku Keempat',
            'Tanggal_Peminjaman'=>'2021-01-06 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-14 16:55:59',
            'Jumlah_Denda'=> '45000'
            ],
            [
            'NIM'=>'1101174232',
            'name'=>'Tiara',
            'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KDA/OPLIB/1234',
            'Info_Buku'=> 'Buku Kedua',
            'Tanggal_Peminjaman'=>'2021-01-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 16:55:59',
            'Jumlah_Denda'=> '15000'
            ]

        ]);
    }
}
