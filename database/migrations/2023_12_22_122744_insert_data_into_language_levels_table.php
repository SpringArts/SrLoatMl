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
                "level" => "n1",
                "order" => 1,
                "language_id" => 1,
            ],
            [
                "id" => 2,
                "level" => "n2",
                "order" => 2,
                "language_id" => 1,
            ],
            [
                "id" => 3,
                "level" => "n3",
                "order" => 3,
                "language_id" => 1,
            ],
            [
                "id" => 4,
                "level" => "n4",
                "order" => 4,
                "language_id" => 1,
            ],
            [
                "id" => 5,
                "level" => "n5",
                "order" => 5,
                "language_id" => 1,
            ]
        ];
        DB::table('language_levels')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
