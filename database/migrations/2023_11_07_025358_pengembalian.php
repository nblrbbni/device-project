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
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peminjaman_id');
            $table->foreign("peminjaman_id")->references("id")->on("peminjaman");
            $table->time("waktu_selesai");
            $table->unsignedBigInteger('persetujuan_user_id');
            $table->foreign("persetujuan_user_id")->references("id")->on("user");
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengembalian');

    }
};