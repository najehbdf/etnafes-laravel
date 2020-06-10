<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackListHebergementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pack_list_hebergements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pack_id');
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');
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
        Schema::dropIfExists('pack_list_hebergements');
    }
}
