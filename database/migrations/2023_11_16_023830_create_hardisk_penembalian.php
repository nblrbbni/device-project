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
        Schema::create('hardisk_penembalian', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal_peminjaman");
            $table->string("nama");
            $table->integer("nomor_hardisk");
            $table->string("kondisi_hardisk");
            $table->time("waktu_pengembalian");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardisk_penembalian');
    }
};
