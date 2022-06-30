<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPmksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pmks', function (Blueprint $table) {
            $table->id();
            $table->string('id_peternak');
            $table->string('tanggal');
            $table->string('terduga_kambing')->nullable();
            $table->string('tertular_kambing')->nullable();
            $table->string('terduga_kerbau')->nullable();
            $table->string('tertular_kerbau')->nullable();
            $table->string('terduga_sapi_perah')->nullable();
            $table->string('tertular_sapi_perah')->nullable();
            $table->string('terduga_sapi_potong')->nullable();
            $table->string('tertular_sapi_potong')->nullable();
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
        Schema::dropIfExists('master_pmks');
    }
}
