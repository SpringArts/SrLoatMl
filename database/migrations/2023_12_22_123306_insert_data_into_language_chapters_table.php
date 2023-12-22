<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $data = [
            [
                "id" => 1,
                "language_level_id" => 2,
                "chapter" => "1-1",
                "order" => 1,
            ],
            [
                "id" => 2,
                "language_level_id" => 2,
                "chapter" => "1-2",
                "order" => 2,
            ],
            [
                "id" => 3,
                "language_level_id" => 2,
                "chapter" => "1-3",
                "order" => 3,
            ],
            [
                "id" => 4,
                "language_level_id" => 2,
                "chapter" => "1-4",
                "order" => 4,
            ],
            [
                "id" => 5,
                "language_level_id" => 2,
                "chapter" => "1-5",
                "order" => 5,
            ],
        ];
        DB::table('language_chapters')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
