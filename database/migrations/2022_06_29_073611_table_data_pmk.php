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
            $table->string('terduga_kambing')->nullable();
            $table->string('tertular_kambing')->nullable();
            $table->string('terduga_kerbau')->nullable();
            $table->string('tertular_kerbau')->nullable();
            $table->string('terduga_sapi_perah')->nullable();
            $table->string('tertular_sapi_perah')->nullable();
            $table->string('terduga_sapi_potong')->nullable();
            $table->string('tertular_sapi_potong')->nullable();

            $table->timestamp('tanggal_pengujian_lab')->nullable();
            $table->string('hasil_pengujian_lab')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('mati')->nullable();
            $table->string('potong_bersyarat')->nullable();
            $table->string('sembuh')->nullable();
            $table->boolean('status_kasus')->nullable();
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
