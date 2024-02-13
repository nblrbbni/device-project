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
        Schema::create('pinjamlaptop', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("tanggal_peminjaman");
            $table->string("nama");
            $table->string("mata_pelajaran");
            $table->string("kode_device");
            $table->string("mentoring_mapel");
            $table->time("waktu_peminjaman");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjamlaptop');
    }
};