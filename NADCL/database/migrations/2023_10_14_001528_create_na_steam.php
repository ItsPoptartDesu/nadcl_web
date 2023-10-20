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
        Schema::create('na_steam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('ownerid')->index();
            $table->bigInteger('steamid64')->nullable();
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
        Schema::dropIfExists('na_steam');
    }
};
