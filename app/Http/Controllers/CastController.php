<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Cast; // menggunakan model Cast
use File; // akan mengganti file yang lama

class CastController extends Controller
{
    public function create()
    {
        $cast = Cast::all();
        return view('cast/create', compact('cast'));
    }

    public function store(Request $request)
    {
        // Fungsi Validasi
        $request->validate([
            'nama'  => 'required',
            'umur'  => 'required',
            'bio'   => 'required|mimes:png,jpg,jpeg|max:2048',
        ],
        // Custom Pesan Error
        [
            'nama.required'     => 'Nama Tidak Boleh Kosong !',
            'umur.required'     => 'Umur Tidak Boleh Kosong !',
            'bio.required'      => 'Biodata Tidak Boleh Kosong !',
        ]);

        $fileName = time().'.'.$request->bio->extension();
        $cast = new Cast;
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $fileName;
        $cast->save();
        $request->bio->move(public_path('image'), $fileName);

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/cast');

        // Fungsi masukkan ke database
        /*DB::table('cast')->insert(
            [
                'nama'  => $request['nama'],
                'umur'  => $request['umur'],
                'bio'   => $request['bio']
            ]
        );*/
    }

    public function index()
    {
        //$cast = DB::table('cast')->get();
 
        $cast = Cast::all();
        return view('/cast/index', compact('cast'));
    }

    public function show($id)
    {
        //$cast = DB::table('cast')->where('id', $id)->first();

        $cast = Cast::findorfail($id);
        return view('/cast/show', compact('cast'));
    }

    public function edit($id)
    {
        //$cast = DB::table('cast')->where('id', $id)->first();

        $cast = Cast::all();
        $cast = Cast::findorfail($id);
        return view('/cast/edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        // Fungsi Validasi
        $request->validate([
            'nama'  => 'required',
            'umur'  => 'required',
            'bio'   => 'mimes:png,jpg,jpeg|max:2048',
        ],
        // Custom Pesan Error
        [
            'nama.required'     => 'Nama Tidak Boleh Kosong !',
            'umur.required'     => 'Umur Tidak Boleh Kosong !',
        ]);

        $cast = Cast::findorfail($id);

        if($request->has('bio')) 
        {
            $path = "image/";
            File::delete($path . $cast->bio);
            $fileName = time().'.'.$request->bio->extension();
            $request->bio->move(public_path('image'), $fileName);

            $cast_data = [
                'nama' => $request->nama,
                'umur' => $request->umur,
                'bio' => $fileName,
            ];
        }
        else
        {
            $cast_data = [
                'nama' => $request->nama,
                'umur' => $request->umur,
            ];
        }

        $cast->update($cast_data);

        // Setelah semua fungsi kita tinggal redirect & return
        return redirect('/cast');

        /*DB::table('cast')
            ->where('id', $id)
            ->update(
            [
                'nama'  => $request['nama'],
                'umur'  => $request['umur'],
                'bio'   => $request['bio'],
            ]
        );*/
    }

    public function destroy($id)
    {
        $cast = DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }
    
}
