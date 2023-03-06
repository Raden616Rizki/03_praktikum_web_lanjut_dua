<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function rafi() {
        return view('profile.rafi');
    }

    public function raden() {
        return view('profile.raden');
    }
}
