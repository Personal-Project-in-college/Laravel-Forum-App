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
        Schema::create('post_has_tags', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // Foreign Keys
            $table->foreignUuid('post_id')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('tag_id')->references('id')->on('tags')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();

            // Unique untuk mencegah tag yang sama pada post yang sama
            $table->unique(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_has_tags');
    }
};
