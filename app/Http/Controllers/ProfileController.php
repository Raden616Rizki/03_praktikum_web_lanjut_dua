<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use App\Models\Hobi;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    // public function rafi() {
    //     $profil = Profil::getBySlug();
    //     return view('profile.rafi') -> with('profil', $profil);
    // }

    // public function raden() {
    //     $profil = Profil::getBySlug();
    //     return view('profile.raden') -> with('profil', $profil);
    // }

    public function profil($slug) {
        $profil = Profil::getBySlug($slug);
        $hobi = Hobi::getBySlug($slug);
        return view('profile', ['profil' => $profil, 'hobi' => $hobi]);
    }
}
