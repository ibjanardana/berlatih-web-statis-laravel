<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function welcome(Request $request)
    {
        $namaDepan = $request['firstname'];
        $namaBelakang = $request['lastname'];
        $namaLengkap = "$namaDepan $namaBelakang";
        return view('welcome', compact("namaLengkap"));
    }

    public function register()
    {
        return view('register');
    }
}
