<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            // [
            //     'foto_profil' => "rafi-profile.jpg",
            //     'nama' => 'Muhamad Rafi prabowo',
            //     'slug' => 'rafi',
            //     'pendidikan' => 'SMAN 1 GARUM',
            //     'alamat' => 'Wlingi, Kab Blitar Jawa Timur'
            // ],
            // [
            //     'foto_profil' => "foto_profile.jpeg",
            //     'nama' => 'Raden Rizki',
            //     'slug' => 'raden',
            //     'pendidikan' => 'SMKN 1 Doko',
            //     'alamat' => 'Doko, Kab Blitar Jawa Timur'
            // ]
        ];
        DB::table('profils')->insert($data);
    }
}
