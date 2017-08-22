<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->integer('age');
            $table->string('bod'); //birth of date
            $table->string('pod'); //place of date
            $table->integer('phone');
            $table->string('father');
            $table->string('mother');
            $table->string('hobby');
            $table->string('bloodtype');
            $table->integer('brothers'); //number of brothers
            $table->integer('sambung_id');
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
        Schema::dropIfExists('detail_students');
    }
}
