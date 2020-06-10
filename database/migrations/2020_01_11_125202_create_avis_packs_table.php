<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAvisPacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avis_packs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->integer('nbr_etoile');
           $table->unsignedBigInteger('pack_id');
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');
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
        Schema::dropIfExists('avis_packs');
    }
}
