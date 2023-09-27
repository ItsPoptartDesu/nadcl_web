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
            // Adding an index here to make searching for a profile faster
            $table->string('key')->index();
            $table->string('displayname')->nullable();
            $table->text('about')->nullable();
            $table->string('siggy')->nullable();
            $table->string('headshot')->nullable();
            $table->string('hottake')->nullable();
            $table->int('role')->nullable();
            $table->string('mmr')->nullable();
            $table->string('cancaptain')->nullable();
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
