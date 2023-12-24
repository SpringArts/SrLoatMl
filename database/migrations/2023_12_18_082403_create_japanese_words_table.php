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
        Schema::create('japanese_words', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hiragana', 50);
            $table->string('kanji', 50);
            $table->string('romaji', 50);
            $table->string('english', 50);
            $table->foreignId('language_chapter_id')->constrained('language_chapters');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_japanese_words');
    }
};
