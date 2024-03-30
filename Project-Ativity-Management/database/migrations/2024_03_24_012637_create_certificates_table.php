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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id('certificateId');
            $table->string('fileName');
            $table->string('templagePath');
            $table->string('activity_type_id'); //still not having the talble
            $table->string('admin_id');
            $table->timestamps();

            $table->foreign('admin_id')
            ->references('admin_id')->on('admins')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
