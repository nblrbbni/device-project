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
        Schema::create('printer_penembalian', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal_peminjaman");
            $table->string("nama");
            $table->string("kondisi_printer");
            $table->time("waktu_pengembalian");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('printer_penembalian');
    }
};
