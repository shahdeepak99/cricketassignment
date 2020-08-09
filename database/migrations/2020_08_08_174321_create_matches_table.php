<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('team1');
            $table->unsignedBigInteger('team2');
            $table->unsignedBigInteger('winner_id')->nullable()->default(null);
            $table->dateTime('match_on');
            $table->timestamps();
            $table->foreign('team1')->references('id')->on('teams');
            $table->foreign('team2')->references('id')->on('teams');
            $table->foreign('winner_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
