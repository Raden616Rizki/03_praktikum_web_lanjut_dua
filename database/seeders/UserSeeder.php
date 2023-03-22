<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            'username'=> 'rafiprabowo',
            'name' => 'Muhamad Rafi Prabowo',
            'email' => 'iydrafiprabowo@gmail.com',
            'password'=> Hash::make('rafiprabowo0987')
        ]);

        DB::table('users')->insert([
            'username'=> 'radenrizki',
            'name' => 'Raden Rizki',
            'email' => 'radenrizki@gmail.com',
            'password'=> Hash::make('radenrizki123')
        ]);
    }
}