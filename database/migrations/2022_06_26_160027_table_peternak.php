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
            $table->string('alamat')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
            $table->string('kode_kecamatan')->nullable();
            $table->string('kode_kelurahan')->nullable();
            $table->string('longitude')->nullable();
            $table->string('latitude')->nullable();
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
