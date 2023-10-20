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
        Schema::create('na_team', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('teamowner');
            $table->string('teamname');
            $table->string('teamlogo');
            $table->text('about');
            $table->text('pastplayers')->nullable();
            $table->string('manager')->nullable();
            $table->string('externalsite')->nullable();
            $table->string('x')->nullable();
            $table->string('youtube')->nullable();
            $table->bigInteger('totalwinnings')->nullable();
            $table->integer('pos1')->nullable();
            $table->integer('pos2')->nullable();
            $table->integer('pos3')->nullable();
            $table->integer('pos4')->nullable();
            $table->integer('pos5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('na_team');
    }
};
