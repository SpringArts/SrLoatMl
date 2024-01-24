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
            [
                "id" => 6,
                "language_level_id" => 2,
                "chapter" => "2-1",
                "order" => 1,
            ],
            [
                "id" => 7,
                "language_level_id" => 2,
                "chapter" => "2-2",
                "order" => 2,
            ],
            [
                "id" => 8,
                "language_level_id" => 2,
                "chapter" => "2-3",
                "order" => 3,
            ],
            [
                "id" => 9,
                "language_level_id" => 2,
                "chapter" => "2-4",
                "order" => 4,
            ],
            [
                "id" => 10,
                "language_level_id" => 2,
                "chapter" => "2-5",
                "order" => 5,
            ],
            [
                "id" => 11,
                "language_level_id" => 2,
                "chapter" => "3-1",
                "order" => 1,
            ],
            [
                "id" => 12,
                "language_level_id" => 2,
                "chapter" => "3-2",
                "order" => 2,
            ],
            [
                "id" => 13,
                "language_level_id" => 2,
                "chapter" => "3-3",
                "order" => 3,
            ],
            [
                "id" => 14,
                "language_level_id" => 2,
                "chapter" => "3-4",
                "order" => 4,
            ],
            [
                "id" => 15,
                "language_level_id" => 2,
                "chapter" => "3-5",
                "order" => 5,
            ],
            [
                "id" => 16,
                "language_level_id" => 2,
                "chapter" => "4-1",
                "order" => 1,
            ],
            [
                "id" => 17,
                "language_level_id" => 2,
                "chapter" => "4-2",
                "order" => 2,
            ],
            [
                "id" => 18,
                "language_level_id" => 2,
                "chapter" => "4-3",
                "order" => 3,
            ],
            [
                "id" => 19,
                "language_level_id" => 2,
                "chapter" => "4-4",
                "order" => 4,
            ],
            [
                "id" => 20,
                "language_level_id" => 2,
                "chapter" => "4-5",
                "order" => 5,
            ],
            [
                "id" => 21,
                "language_level_id" => 2,
                "chapter" => "5-1",
                "order" => 1,
            ],
            [
                "id" => 22,
                "language_level_id" => 2,
                "chapter" => "5-2",
                "order" => 2,
            ],
            [
                "id" => 23,
                "language_level_id" => 2,
                "chapter" => "5-3",
                "order" => 3,
            ],
            [
                "id" => 24,
                "language_level_id" => 2,
                "chapter" => "5-4",
                "order" => 4,
            ],
            [
                "id" => 25,
                "language_level_id" => 2,
                "chapter" => "5-5",
                "order" => 5,
            ],
            [
                "id" => 26,
                "language_level_id" => 2,
                "chapter" => "6-1",
                "order" => 1,
            ],
            [
                "id" => 27,
                "language_level_id" => 2,
                "chapter" => "6-2",
                "order" => 2,
            ],
            [
                "id" => 28,
                "language_level_id" => 2,
                "chapter" => "6-3",
                "order" => 3,
            ],
            [
                "id" => 29,
                "language_level_id" => 2,
                "chapter" => "6-4",
                "order" => 4,
            ],
            [
                "id" => 30,
                "language_level_id" => 2,
                "chapter" => "6-5",
                "order" => 5,
            ],
            [
                "id" => 31,
                "language_level_id" => 2,
                "chapter" => "7-1",
                "order" => 1,
            ],
            [
                "id" => 32,
                "language_level_id" => 2,
                "chapter" => "7-2",
                "order" => 2,
            ],
            [
                "id" => 33,
                "language_level_id" => 2,
                "chapter" => "7-3",
                "order" => 3,
            ],
            [
                "id" => 34,
                "language_level_id" => 2,
                "chapter" => "7-4",
                "order" => 4,
            ],
            [
                "id" => 35,
                "language_level_id" => 2,
                "chapter" => "7-5",
                "order" => 5,
            ],
            [
                "id" => 36,
                "language_level_id" => 2,
                "chapter" => "8-1",
                "order" => 1,
            ],
            [
                "id" => 37,
                "language_level_id" => 2,
                "chapter" => "8-2",
                "order" => 2,
            ],
            [
                "id" => 38,
                "language_level_id" => 2,
                "chapter" => "8-3",
                "order" => 3,
            ],
            [
                "id" => 39,
                "language_level_id" => 2,
                "chapter" => "8-4",
                "order" => 4,
            ],
            [
                "id" => 40,
                "language_level_id" => 2,
                "chapter" => "8-5",
                "order" => 5,
            ],
            [
                "id" => 41,
                "language_level_id" => 2,
                "chapter" => "9-1",
                "order" => 1,
            ],
            [
                "id" => 42,
                "language_level_id" => 2,
                "chapter" => "9-2",
                "order" => 2,
            ],
            [
                "id" => 43,
                "language_level_id" => 2,
                "chapter" => "9-3",
                "order" => 3,
            ],
            [
                "id" => 44,
                "language_level_id" => 2,
                "chapter" => "9-4",
                "order" => 4,
            ],
            [
                "id" => 45,
                "language_level_id" => 2,
                "chapter" => "9-5",
                "order" => 5,
            ],
            [
                "id" => 46,
                "language_level_id" => 2,
                "chapter" => "10-1",
                "order" => 1,
            ],
            [
                "id" => 47,
                "language_level_id" => 2,
                "chapter" => "10-2",
                "order" => 2,
            ],
            [
                "id" => 48,
                "language_level_id" => 2,
                "chapter" => "10-3",
                "order" => 3,
            ],
            [
                "id" => 49,
                "language_level_id" => 2,
                "chapter" => "10-4",
                "order" => 4,
            ],
            [
                "id" => 50,
                "language_level_id" => 2,
                "chapter" => "10-5",
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
