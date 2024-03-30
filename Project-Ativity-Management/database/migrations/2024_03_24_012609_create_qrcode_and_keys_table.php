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
        Schema::create('qrcode_and_keys', function (Blueprint $table) {
            $table->id('qrcodeId');
            $table->binary('code');
            $table->string('imagePath');
            $table->string('key');
            $table->string('activity_id');
            $table->timestamps();

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
        Schema::dropIfExists('qrcode_and_keys');
    }
};
