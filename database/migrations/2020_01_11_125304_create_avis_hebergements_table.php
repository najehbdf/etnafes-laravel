<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_hebergements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('nbr_etoile');
           $table->unsignedBigInteger('hebergement_id');
            $table->foreign('hebergement_id')->references('id')->on('hebergements')->onDelete('cascade');
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
        Schema::dropIfExists('avis_hebergements');
    }
}
