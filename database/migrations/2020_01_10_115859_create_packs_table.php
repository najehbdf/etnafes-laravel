<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->date('date_deb');
            $table->date('date_fin');
            $table->string('description');
            $table->string('url_video');
            $table->integer('nb_place_max');
            $table->integer('nb_place_dispo');
            $table->string('vip');
            $table->float('prix_fix');
            $table->float('remise');
            $table->integer('nb_place_remise');
            $table->float('taux_remise');
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
        Schema::dropIfExists('packs');
    }
}
