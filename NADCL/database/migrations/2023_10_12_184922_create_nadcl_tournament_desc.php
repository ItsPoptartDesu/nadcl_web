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
        Schema::create('nadcl_tournament_desc', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('seriesname');
            $table->string('organizer');
            $table->string('server');
            $table->string('type');
            $table->string('location');
            $table->string('format');
            $table->integer('prizepool');
            $table->date('startdate');
            $table->date('enddate');
            $table->float('version');
            $table->integer('numteams');
            $table->boolean('islive');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nadcl_tournament_desc');
    }
};
