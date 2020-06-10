<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVilleIdToPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packs', function (Blueprint $table) {
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packs', function (Blueprint $table) {
           $table->dropForeign(['ville_id']);
           $table->dropColumn('ville_id');
        });
    }
}
