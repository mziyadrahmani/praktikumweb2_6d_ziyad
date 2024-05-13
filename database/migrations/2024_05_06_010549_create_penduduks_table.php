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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->string('nik_kk', 16)->primary();
            $table->string('nama_kk', 16);
            $table->string('jeniskelamin_kk', 16);
            $table->date('tgllahir_kk', 16);
            $table->string('pendidikan_kk', 16);
            $table->string('pekerjaan_kk', 16);
            $table->string('penghasilan_kk', 16);
            $table->string('alamat_kk', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};