<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableDataPmk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pmk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_peternak');
            $table->timestamp('tanggal_pemeriksaan');
            $table->integer('terduga_kambing')->nullable();
            $table->integer('tertular_kambing')->nullable();
            $table->integer('terduga_kerbau')->nullable();
            $table->integer('tertular_kerbau')->nullable();
            $table->integer('terduga_sapi_perah')->nullable();
            $table->integer('tertular_sapi_perah')->nullable();
            $table->integer('terduga_sapi_potong')->nullable();
            $table->integer('tertular_sapi_potong')->nullable();

            $table->timestamp('tanggal_pengujian_lab')->nullable();
            $table->integer('hasil_pengujian_lab')->nullable();
            $table->string('keterangan')->nullable();
            $table->integer('mati')->nullable();
            $table->integer('potong_bersyarat')->nullable();
            $table->integer('sembuh')->nullable();
            $table->interger('status_kasus')->nullable();
            $table->timestamp('tanggal_perkembangan_kasus')->nullable();


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
        Schema::dropIfExists('data_pmk');
    }
}
