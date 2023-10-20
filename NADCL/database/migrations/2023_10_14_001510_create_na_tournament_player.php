<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('na_tournament_player', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('playerid');
            $table->integer('tournamentid');
            //additional stats for the player? scores? number of games? 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('na_tournament_player');
    }
};
