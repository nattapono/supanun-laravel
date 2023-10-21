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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('link_th');
            $table->string('description_th');
            $table->string('text_zodiac_th');
            $table->string('text_service_th');
            $table->string('link_ch');
            $table->string('description_ch');
            $table->string('text_zodiac_ch');
            $table->string('text_service_ch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
