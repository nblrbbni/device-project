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
        Schema::create('siswa_peminjaman', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('siswa_id');
            // $table->foreign("siswa_id")->refereces("id")->on("siswa");
            $table->integer("peminjaman_id")->references("id")->on("peminjaman");
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_peminjaman');

    }
};
