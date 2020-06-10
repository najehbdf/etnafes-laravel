<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneTouristiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_touristiques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('description');
            $table->string('url_video');
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
        Schema::dropIfExists('zone_touristiques');
    }
}
