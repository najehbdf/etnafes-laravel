<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hebergements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->integer('nbr_etoile');
            $table->integer('nbr_chambre_dispo');
            $table->string('description');
            $table->string('wifi');
            $table->string('nightclub');
            $table->string('celibataire');
            $table->string('burkini');
            $table->unsignedBigInteger('proprietaire_id');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onDelete('cascade');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id')->on('villes')->onDelete('cascade');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hebergements');
    }
}
