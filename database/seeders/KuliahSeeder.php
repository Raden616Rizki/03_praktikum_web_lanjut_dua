<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class KuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dt = Carbon::now();
        $time = $dt -> toTimeString();
        $date = $dt -> isoFormat('dddd, D MMMM Y');
        //
        $data = [
            [
                'id_profil' => 1,
                'pengalaman' => 'Hidup gini-gini amat yakk',
                'waktu' => $date,
                'tanggal' => $time
            ],
            [
                'id_profil' => 2,
                'pengalaman' => 'Semester 4 banyak kuliah pagi dan pulang sore',
                'waktu' => $date,
                'tanggal' => $time
            ]
        ];
        DB::table('kuliahs')->insert($data);
    }
}
