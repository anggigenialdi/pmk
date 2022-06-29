<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablePeternak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peternak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('kode_kecamatan')->nullable();
            $table->string('kode_kelurahan')->nullable();
            $table->integer('rw')->nullable();
            $table->integer('rt')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jumlah_kambing')->nullable();
            $table->string('jumlah_kerbau')->nullable();
            $table->string('jumlah_sapi_perah')->nullable();
            $table->string('jumlah_sapi_potong')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peternak');
    }
}
