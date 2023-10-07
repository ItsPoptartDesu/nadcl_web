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
        Schema::create('nadcl_team', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key')->index();
            $table->string('teamname');
            $table->string('teamlogo');
            $table->text('about');
            $table->text('players')->nullable();
            $table->text('pastplayers')->nullable();
            $table->string('manager')->nullable();
            $table->string('externalsite')->nullable();
            $table->string('x')->nullable();
            $table->string('youtube')->nullable();
            $table->bigInteger('totalwinnings')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nadcl_team');
    }
};
