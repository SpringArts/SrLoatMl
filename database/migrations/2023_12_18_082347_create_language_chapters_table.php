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
        Schema::create('language_chapters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('language_level_id')->constrained('language_levels')->cascadeOnDelete();
            $table->string('chapter', 20)->unique();
            $table->int('order')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_chapters');
    }
};
