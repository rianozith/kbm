<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('age');
            $table->string('address');
            $table->integer('sambung_id'); //kelompok
            $table->string('phone');
            $table->string('status'); //MT - MS
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
        Schema::dropIfExists('teacher_details');
    }
}
