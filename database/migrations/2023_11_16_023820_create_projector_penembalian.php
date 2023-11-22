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
        Schema::create('projector_penembalian', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal_peminjaman");
            $table->string("nama");
            $table->string("kondisi_projector");
            $table->string("kondisi_kabel_power");
            $table->string("kondisi_remote");
            $table->time("waktu_pengembalian");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projector_penembalian');
    }
};
