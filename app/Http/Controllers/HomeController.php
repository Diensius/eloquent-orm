<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function master()
    {
        return view('adminlte/master/master');
    }

    public function table()
    {
        return view('table/table');
    }

    public function data_tables()
    {
        return view('table/data_tables');
    }
}
