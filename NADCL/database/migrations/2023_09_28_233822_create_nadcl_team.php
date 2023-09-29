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
            $table->text('key')->index();
            $table->text('about');
            $table->text('players');
            $table->text('pastplayers');
            $table->string('teamlogo');
            $table->string('manager');
            $table->string('externalsite');
            $table->string('x');
            $table->string('youtube');
            $table->bigInteger('totalwinnings');
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
