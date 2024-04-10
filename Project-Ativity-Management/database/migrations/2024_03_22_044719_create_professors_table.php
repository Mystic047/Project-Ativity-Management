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
        Schema::create('professors', function (Blueprint $table) {
            $table->string('professors_id')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nickname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('faculty_id');
            $table->string('area_id');
            $table->string('profile_picture')->nullable();
            $table->rememberToken();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professors');
    }
};
