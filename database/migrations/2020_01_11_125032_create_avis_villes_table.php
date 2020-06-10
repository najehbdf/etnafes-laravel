<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_villes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('nbr_etoile');
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
        Schema::dropIfExists('avis_villes');
    }
}
