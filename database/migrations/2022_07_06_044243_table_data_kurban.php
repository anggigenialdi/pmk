<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDataKurban extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kurban', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_kecamatan');
            $table->integer('id_kelurahan');
            $table->integer('domba_layak')->nullable();
            $table->integer('kambing_layak')->nullable();
            $table->integer('sapi_layak')->nullable();
            $table->integer('kerbau_layak')->nullable();
            $table->integer('domba_tidak_layak')->nullable();
            $table->integer('kambing_tidak_layak')->nullable();
            $table->integer('sapi_tidak_layak')->nullable();
            $table->integer('kerbau_tidak_layak')->nullable();
            $table->timestamp('tanggal')->nullable();
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
        Schema::dropIfExists('data_kurban');
    }
}
