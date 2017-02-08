<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_murid');
            $table->integer('umur_murid');
            $table->string('alamat_murid');
            $table->string('nohp_murid');
            $table->string('kelas_murid');
            $table->integer('id_kelas_generus')->nullable();
            $table->integer('id_kehadiran_murid')->nullable();
            $table->integer('id_acara_generus')->nullable();
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
        Schema::dropIfExists('murids');
    }
}
