<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function pengalaman() {
        $kuliah = DB::table('kuliahs')
                    ->join('profils', 'kuliahs.id_profil', '=', 'profils.id_profil')
                    ->get();
        echo "<script>console.log('{$kuliah}' );</script>";
        return view('pengalaman', ['kuliah' => $kuliah]);
    }
}
