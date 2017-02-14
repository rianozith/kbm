<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelationshipToMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('murids', function (Blueprint $table) {
            $table-> integer('kegiatan_id')->unsigned()->change();
            $table-> foreign('kegiatan_id')->references('id')->on('kegiatans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('murids', function (Blueprint $table) {
            $table->dropForeign('murids_kegiatan_id_foreign');
        });

        Schema::table('murids', function (Blueprint $table) {
            $table->dropIndex('murids_kegiatan_id_foreign');
        });

        Schema::table('murids', function (Blueprint $table) {
            $table->integer('kegiatan_id')->change();
        });

    }
}
