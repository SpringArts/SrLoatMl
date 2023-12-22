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
        Schema::create('login_infos', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 50);
            $table->string('user-agent', 50);
            $table->string('platform', 20);
            $table->string('country', 20);
            $table->string('provider', 20);
            $table->string('provider_id');
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('admin_id')->constrained('admins')->cascadeOnDelete();
            $table->string('type', 10);
            $table->integer('time')->default(0)->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_infos');
    }
};
