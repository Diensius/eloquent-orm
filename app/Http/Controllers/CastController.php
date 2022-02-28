<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function create()
    {
        return view('cast/create');
    }

    public function store(Request $request)
    {
        // Fungsi Validasi
        $request->validate([
            'nama'  => 'required',
            'umur'  => 'required',
            'bio'   => 'required',
        ],
        // Custom Pesan Error
        [
            'nama.required'     => 'Nama Tidak Boleh Kosong !',
            'umur.required'     => 'Umur Tidak Boleh Kosong !',
            'bio.required'      => 'Biodata Tidak Boleh Kosong !',
        ]
    
        );

        // Fungsi masukkan ke database
        DB::table('cast')->insert(
            [
                'nama'  => $request['nama'],
                'umur'  => $request['umur'],
                'bio'   => $request['bio']
            ]
        );

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/cast');

    }

    public function index()
    {
        $cast = DB::table('cast')->get();
 
        return view('/cast/index', compact('cast'));
    }

    public function show($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('/cast/show', compact('cast'));
    }

    public function edit($id)
    {
        $cast = DB::table('cast')->where('id', $id)->first();

        return view('/cast/edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        // Fungsi Validasi
        $request->validate([
            'nama'  => 'required',
            'umur'  => 'required',
            'bio'   => 'required',
        ],
        // Custom Pesan Error
        [
            'nama.required'     => 'Nama Tidak Boleh Kosong !',
            'umur.required'     => 'Umur Tidak Boleh Kosong !',
            'bio.required'      => 'Biodata Tidak Boleh Kosong !',
        ]
        );

        DB::table('cast')
            ->where('id', $id)
            ->update(
            [
                'nama'  => $request['nama'],
                'umur'  => $request['umur'],
                'bio'   => $request['bio'],
            ]
        );

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/cast');
    }

    public function destroy($id)
    {
        $cast = DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }
    
}
