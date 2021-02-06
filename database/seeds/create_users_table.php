<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_users_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username'=>'tiaran',
                'name'=>'Tiara Tiara',
                'NIM'=>'1101174232',
                'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi / FTE',
                'Angkatan'=>'2017',
                'email'=>'tiaranrhkmh@gmail.com',
                'email_verified_at'=> '2021-01-17 16:55:59',
                'password'=>bcrypt('Nurhikmah23.'),
                'remember_token'=> Str::random(64),
            ],
            [
                'username'=>'tsasabita',
                'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
                'NIM'=>'1101174100',
                'Jurusan/Fakultas'=>'S1 Teknik Telekomunikasi / FTE',
                'Angkatan'=>'2017',
                'email'=>'tsasabita@gmail.com',
                'email_verified_at'=>'2021-01-16 15:00:00',
                'password'=>bcrypt('Gadang22.'),
                'remember_token'=> Str::random(64),
            ]
        ]);
    }
}
