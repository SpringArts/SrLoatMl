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
                "name" => "japanese",
                "total_level" => 5,
            ],
            [
                "id" => 2,
                "name" => "english",
                "total_level" => 5,
            ],
            [
                "id" => 3,
                "name" => "burmese",
                "total_level" => 5,

            ],

        ];
        DB::table('languages')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
