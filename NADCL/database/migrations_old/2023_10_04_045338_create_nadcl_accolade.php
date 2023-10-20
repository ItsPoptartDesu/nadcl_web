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
        Schema::create('nadcl_accolade', function (Blueprint $table) {
            $table->id()->index();
            $table->timestamps();
            $table->text('about');
            $table->string('img');
            $table->integer('playerid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nadcl_accolade');
    }
};
