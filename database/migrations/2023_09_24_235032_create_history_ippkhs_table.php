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
        Schema::create('history_ippkhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_ippkh_id');
            $table->string('l1');
            $table->string('l2');
            $table->string('l3');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_ippkhs');
    }
};