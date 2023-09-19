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
        Schema::create('steam', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key');
            $table->bigInteger('steamid64');
            $table->string('personaname');
            $table->string('profileurl');
            $table->string('avatar');
            $table->string('avatarmedium');
            $table->string('avatarfull');
            $table->string('realname');
            $table->string('loccountrycode');
            $table->string('locstatecode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steam');
    }
};
