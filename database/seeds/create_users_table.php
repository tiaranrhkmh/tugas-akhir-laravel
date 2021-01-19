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
                'email'=>'tiaranrhkmh@gmail.com',
                'email_verified_at'=> '2021-01-17 16:55:59',
                'password'=>bcrypt('Nurhikmah23.')
            ],
            [
                'username'=>'tsasabita',
                'name'=>'Tsabita Al-Asshifa Hadi Kusuma',
                'NIM'=>'1101174100',
                'email'=>'tsasabita@gmail.com',
                'email_verified_at'=>'2021-01-16 15:00:00',
                'password'=>bcrypt('Gadang22.')
            ]
        ]);
    }
}