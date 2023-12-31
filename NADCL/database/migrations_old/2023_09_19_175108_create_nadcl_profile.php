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
        Schema::create('nadcl_profile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email')->index();
            $table->string('displayname')->nullable();
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
            $table->text('altnames')->nullable();
            $table->boolean('isteamowner');
            $table->boolean('isadmin');
            $table->bigInteger('steamid64')->nullable();// steam info 
            $table->string('personaname')->nullable();
            $table->string('profileurl')->nullable();
            $table->string('avatar')->nullable();
            $table->string('avatarmedium')->nullable();
            $table->string('avatarfull')->nullable();
            $table->string('realname')->nullable();
            $table->string('loccountrycode')->nullable();
            $table->string('locstatecode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nadcl_profile');
    }
};
