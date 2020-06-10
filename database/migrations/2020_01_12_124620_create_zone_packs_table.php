<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_packs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pack_id');
            $table->foreign('pack_id')->references('id')->on('packs')->onDelete('cascade');
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
        Schema::dropIfExists('zone_packs');
    }
}
