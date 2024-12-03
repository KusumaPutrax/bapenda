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
        Schema::create('tb_penilaian', function (Blueprint $table) {
            $table->id('id_penilaian');
            $table->string('soal1_A, 225');
            $table->string('soal2_A, 225');
            $table->string('soal3_A, 225');
            $table->string('soal4_A, 225');
            $table->string('soal5_A, 225');
            $table->string('soal6_A, 225');
            $table->string('soal7_A, 225');
            $table->string('soal8_A, 225');
            $table->string('soal1_B, 225');
            $table->string('soal2_B, 225');
            $table->string('soal3_B, 225');
            $table->string('soal4_B, 225');
            $table->string('soal5_B, 225');
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_penilaian');
    }
};
