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
                "name" => "userOne",
                "email" => "userOne@gmail.com",
                "password" => "$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW",
            ],
            [
                "name" => "userTwo",
                "email" => "userTwo@gmail.com",
                "password" => "$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW",
            ],
            [
                "name" => "NormalAdmin",
                "email" => "admin@gmail.com",
                "password" => "$2y$10$/wQTKHDVTKcZXxqvgXHR5.yOr6vjBkHoErWrI0vhnHCs6rhF8LTRW",
            ],

        ];
        DB::table('users')->insert($data);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
