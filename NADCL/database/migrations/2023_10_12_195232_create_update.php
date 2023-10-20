<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('nadcl_constants')->insert([
            'youtube' => 'https://www.youtube.com/watch?v=G_-OCwyBHQw,https://www.youtube.com/watch?v=cFBWl1lefQI,https://www.youtube.com/watch?v=DayJlV2szaA',
            'tiktok' => '7283932911332543786,7276485795760950570,7257622405781179690',
            'admins' => 'davidmejia4215@gmail.com'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('update');
    }
};
