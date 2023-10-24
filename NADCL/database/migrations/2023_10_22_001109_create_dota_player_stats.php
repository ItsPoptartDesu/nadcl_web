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
        Schema::create('dota_player_stats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ownerid');
            $table->bigInteger('matchid');
            $table->string('hero');
            $table->integer('kills');
            $table->integer('deaths');
            $table->integer('assists');
            $table->integer('xp_per_min');
            $table->integer('gold_per_min');
            $table->integer('hero_damage');
            $table->integer('tower_damage');
            $table->integer('last_hits');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dota_player_stats');
    }
};
