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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('title');
            $table->foreignId('author_id')->references('id')->on('users')->onDelete('cascade')->constrained(
                table: 'users', indexName: 'news_author_id'
            );
            $table->foreignId('category_id')->constrained(
                table: 'categories', indexName: 'news_category_id'
            );
            $table->text('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
