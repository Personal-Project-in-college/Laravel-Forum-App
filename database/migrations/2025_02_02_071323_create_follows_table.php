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
        Schema::create('follows', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // Relasi ke users
            $table->foreignUuid('follower_id')->references('id')->on('users')->onDelete('cascade'); // Yang mengikuti
            $table->foreignUuid('following_id')->references('id')->on('users')->onDelete('cascade'); // Yang diikuti
            $table->timestamps();
            
            // Tidak boleh follow user yang sama lebih dari 1x
            $table->unique(['follower_id', 'following_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
