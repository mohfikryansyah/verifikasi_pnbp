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
        Schema::create('data_ippkhs', function (Blueprint $table) {
            $table->id();
            $table->string('pt');
            $table->string('email');
            $table->string('nomor_sk');
            $table->integer('masa_berlaku')->nullable();
            $table->date('mulai');
            $table->date('berakhir')->nullable();
            $table->string('luas');
            $table->string('verifikasi_pbnp');
            $table->string('bukti_bayar')->nullable();
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_ippkhs');
    }
};