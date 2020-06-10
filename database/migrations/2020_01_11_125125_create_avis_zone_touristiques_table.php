<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisZoneTouristiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_zone_touristiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('nbr_etoile');
           $table->unsignedBigInteger('zone_touristique_id');
            $table->foreign('zone_touristique_id')->references('id')->on('zone_touristiques')->onDelete('cascade');
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
        Schema::dropIfExists('avis_zone_touristiques');
    }
}
