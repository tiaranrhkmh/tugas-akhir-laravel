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
            'user_id'=>'1',
            'book_id'=>'1',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi / FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/PTM/OPLIB/0024',
            'Info_Buku'=> 'Buku Pertama',
            'Tanggal_Peminjaman'=>'2021-01-10 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-20 08:55:01',
            'Jumlah_Denda'=> '7000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'2',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KDA/OPLIB/0025',
            'Info_Buku'=> 'Buku Kedua',
            'Tanggal_Peminjaman'=>'2020-01-10 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-13 12:02:00',
            'Jumlah_Denda'=> '297000'

            ],
            [
            'user_id'=>'1',
            'book_id'=>'3',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0026',
            'Info_Buku'=> 'Buku Ketiga',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-01 13:50:59',
            'Jumlah_Denda'=> '49000'

            ],
            [
            'user_id'=>'1',
            'book_id'=>'4',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/EPT/OPLIB/0027',
            'Info_Buku'=> 'Buku Keempat',
            'Tanggal_Peminjaman'=>'2021-01-02 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-21 11:55:59',
            'Jumlah_Denda'=> '14000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'5',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0028',
            'Info_Buku'=> 'Buku Kelima',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 09:55:59',
            'Jumlah_Denda'=> '25000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'6',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0029',
            'Info_Buku'=> 'Buku Keenam',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 14:55:59',
            'Jumlah_Denda'=> '25000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'7',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/TJH/OPLIB/0030',
            'Info_Buku'=> 'Buku Ketujuh',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 10:55:59',
            'Jumlah_Denda'=> '30000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'8',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/DLP/OPLIB/0031',
            'Info_Buku'=> 'Buku Kedelepan',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 09:55:59',
            'Jumlah_Denda'=> '15000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'9',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/SBL/OPLIB/0032',
            'Info_Buku'=> 'Buku Kesembilan',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 11:55:59',
            'Jumlah_Denda'=> '22000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'10',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0033',
            'Info_Buku'=> 'Buku Kesepuluh',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 13:55:59',
            'Jumlah_Denda'=> '17000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'11',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0034',
            'Info_Buku'=> 'Buku Kesebelas',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 12:55:59',
            'Jumlah_Denda'=> '27000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'12',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0035',
            'Info_Buku'=> 'Buku Keduabelas',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 12:55:59',
            'Jumlah_Denda'=> '25000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'13',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0036',
            'Info_Buku'=> 'Buku Ketigabelas',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 12:55:59',
            'Jumlah_Denda'=> '60000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'14',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/DBL/OPLIB/0037',
            'Info_Buku'=> 'Buku Keempatbelas',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 12:55:59',
            'Jumlah_Denda'=> '45000'
            ],
            [
            'user_id'=>'2',
            'book_id'=>'15',
            'NIM'=>'1101174100',
            'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/LMA/OPLIB/0038',
            'Info_Buku'=> 'Buku Kelimabelas',
            'Tanggal_Peminjaman'=>'2021-12-08 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-09 12:55:59',
            'Jumlah_Denda'=> '40000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'16',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0039',
            'Info_Buku'=> 'Buku Keenambelas',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-01 13:50:59',
            'Jumlah_Denda'=> '45000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'17',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0040',
            'Info_Buku'=> 'Buku Ketujuhbelas',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-02-01 13:50:59',
            'Jumlah_Denda'=> '35000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'18',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0041',
            'Info_Buku'=> 'Buku Kedelapanbelas',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-01 13:50:59',
            'Jumlah_Denda'=> '15000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'19',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0042',
            'Info_Buku'=> 'Buku Kesembilanbelas',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-01 13:50:59',
            'Jumlah_Denda'=> '2000'
            ],
            [
            'user_id'=>'1',
            'book_id'=>'20',
            'NIM'=>'1101174232',
            'name'=>'Tiara Tiara',
            'Jurusan_Fakultas'=>'S1 Teknik Telekomunikasi/ FTE',
            'Angkatan'=>'2017',
            'Barcode'=> 'BK/KTG/OPLIB/0043',
            'Info_Buku'=> 'Buku Duapuluh',
            'Tanggal_Peminjaman'=>'2020-11-01 16:55:59',
            'Tanggal_Pengembalian'=>'2021-01-01 13:50:59',
            'Jumlah_Denda'=> '5000'
            ],


        ]);
    }
}
