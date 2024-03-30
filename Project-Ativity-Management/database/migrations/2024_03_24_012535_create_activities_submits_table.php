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
        Schema::create('activities_submits', function (Blueprint $table) {
            $table->id('activitySubmitId');
            $table->string('students_id');
            $table->string('activity_id');
            $table->timestamps();

            $table->foreign('students_id')
                ->references('students_id')->on('students')
                ->onDelete('cascade');

            $table->foreign('activity_id')
                ->references('activity_id')->on('activities')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities_submits');
    }
};
