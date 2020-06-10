<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprietairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('Telephone');
            $table->string('email');
            $table->string('gouvernorat');
            $table->string('civilité');
            $table->string('image');
            $table->string('cin');
            $table->string('code_postale');
            $table->string('login');
            $table->string('mot_passe');
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
        Schema::dropIfExists('proprietaires');
    }
}
