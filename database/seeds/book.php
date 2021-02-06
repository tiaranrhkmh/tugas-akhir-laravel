<?php

use App\book_return;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            [
            'Barcode'=> 'BK/PTM/OPLIB/0024',
            'Info_Buku'=> 'Buku Pertama',
            ],
            [
            'Barcode'=> 'BK/KDA/OPLIB/0025',
            'Info_Buku'=> 'Buku Kedua',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0026',
            'Info_Buku'=> 'Buku Ketiga',
            ],
            [
            'Barcode'=> 'BK/EPT/OPLIB/0027',
            'Info_Buku'=> 'Buku Keempat',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0028',
            'Info_Buku'=> 'Buku Kedua',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0029',
            'Info_Buku'=> 'Buku Kedua',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0030',
            'Info_Buku'=> 'Buku Kedua',
            ],
            [
            'Barcode'=> 'BK/DLP/OPLIB/0031',
            'Info_Buku'=> 'Buku Kedelepan',
            ],
            [
            'Barcode'=> 'BK/SBL/OPLIB/0032',
            'Info_Buku'=> 'Buku Kesembilan',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0033',
            'Info_Buku'=> 'Buku Kesepuluh',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0034',
            'Info_Buku'=> 'Buku Kesebelas',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0035',
            'Info_Buku'=> 'Buku Keduabelas',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0036',
            'Info_Buku'=> 'Buku Ketigabelas',
            ],
            [
            'Barcode'=> 'BK/DBL/OPLIB/0037',
            'Info_Buku'=> 'Buku Keempatbelas',
            ],
            [
            'Barcode'=> 'BK/LMA/OPLIB/0038',
            'Info_Buku'=> 'Buku Kelimabelas',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0039',
            'Info_Buku'=> 'Buku Keenambelas',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0040',
            'Info_Buku'=> 'Buku Ketujuhbelas',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0041',
            'Info_Buku'=> 'Buku Kedelapanbelas',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0042',
            'Info_Buku'=> 'Buku Kesembilanbelas',
            ],
            [
            'Barcode'=> 'BK/KTG/OPLIB/0043',
            'Info_Buku'=> 'Buku Duapuluh',
            ]

        ]);
    }
}
