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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // NA Dota Esports User Info
            $table->string('teamid')->nullable();
            $table->string('username')->nullable();
            $table->text('about')->nullable();
            $table->string('siggy')->nullable();
            $table->string('headshot')->nullable();
            $table->string('hottake')->nullable();
            $table->integer('role')->nullable();
            $table->string('mmr')->nullable();
            $table->string('cancaptain')->nullable();
            $table->string('x')->nullable();
            $table->string('discord')->nullable();
            $table->string('twitch')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->integer('accoladedisplayid')->nullable();
            // Feature unlocks
            $table->boolean('issteamlinked');//to be deleted if we ever add tournament players. We have steam info linked through user and na_steam models but i sort players to display based on if their steam is linked
            $table->boolean('isteamowner');
            $table->boolean('isadmin');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
