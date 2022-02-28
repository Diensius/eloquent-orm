<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $table = "cast"; // cara agar dia tidak membaca secara jamak dalam bahasa inggris biasanya ditambah huruf 's'
    protected $fillable = ['nama', 'umur', 'bio']; // untuk menaipulasi data yg ada di dalam database nya

    //public $timestamps = false; untuk mendisable timestamp
}
