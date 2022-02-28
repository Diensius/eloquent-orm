<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form/form');
    }

    public function welcome()
    {
        return view('welcome/welcome');
    }

    public function welcome_post(Request $request)
    {
        //dd($request->all()); // untuk mengecek inputan sudah masuk atau belum
        $namaDepan = $request['firstName']; // lempar data
        $namaBelakang = $request['lastName']; // lempar data

        return view('welcome/welcome', 
                    [   'namaDepan'     => $namaDepan,
                        'namaBelakang'  => $namaBelakang
                    ]); // lempar variabel nama depan dan nama belakang
    }
}
