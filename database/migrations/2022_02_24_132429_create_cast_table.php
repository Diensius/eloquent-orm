<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCastTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cast', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->integer('umur');
            $table->text('bio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() /* untuk menghapus table */
    {
        Schema::dropIfExists('cast'); 
    }
}
