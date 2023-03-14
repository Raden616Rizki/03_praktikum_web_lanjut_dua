<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HobiSeeder extends Seeder
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
            //     'id_profil' => 1,
            //     'gambar' => '',
            //     'hobi' => "bromo.png"
            // ],
            // [
            //     'id_profil' => 1,
            //     'gambar' => '',
            //     'hobi' => "paris.jpg"
            // ],
            // [
            //     'id_profil' => 1,
            //     'gambar' => '',
            //     'hobi' => "bromo-2.jpeg"
            // ],
            // [
            //     'id_profil' => 1,
            //     'gambar' => '',
            //     'hobi' => "bromo-3.jpeg"
            // ],
            // [
            //     'id_profil' => 2,
            //     'gambar' => 'Bermain Kalimba',
            //     'hobi' => "https://lzd-img-global.slatic.net/g/p/378984c6a3a18e2cc8894357c746a81e.jpg_720x720q80.jpg_.webp"
            // ],
            // [
            //     'id_profil' => 2,
            //     'gambar' => 'Menggambar',
            //     'hobi' => "https://cdn.eraspace.com/pub/media/wysiwyg/artikel/Tahun_2022/Juli/menggambaripad-2.jpg"
            // ],
            // [
            //     'id_profil' => 2,
            //     'gambar' => 'Game',
            //     'hobi' => "https://images.tokopedia.net/blog-tokopedia-com/uploads/2021/01/Minecraft.jpg"
            // ]
        ];
        DB::table('hobis')->insert($data);
    }
}
