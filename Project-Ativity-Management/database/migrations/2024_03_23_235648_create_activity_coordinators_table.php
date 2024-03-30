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
        Schema::create('activity_coordinators', function (Blueprint $table) {
            $table->string('ac_id')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nickname');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('faculty_id');
            $table->string('area_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('faculty_id')
                ->references('faculty_id')->on('faculties')
                ->onDelete('cascade');

            $table->foreign('area_id')
                ->references('area_id')->on('areas')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_coordinators');
    }
};
