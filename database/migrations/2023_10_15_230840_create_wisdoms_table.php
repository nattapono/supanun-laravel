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
        Schema::create('wisdoms', function (Blueprint $table) {
            $table->id();
            $table->integer('type_id');
            $table->string('subject_th');
            $table->string('desc_th');
            $table->string('subject_ch');
            $table->string('desc_ch');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisdoms');
    }
};
