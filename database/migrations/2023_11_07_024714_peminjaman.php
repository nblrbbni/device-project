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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream
            $table->foreign("siswa_id")->references("id")->on("siswa");
            $table->foreign("lab_id")->references("id")->on("lab");
            $table->foreign("device_id")->references("id")->on("device");
            $table->foreign("user_id")->references("id")->on("user");
=======
            $table->integer("siswa_id");
            $table->integer("lab_id");
            $table->integer("device_id");
            $table->integer("user_id");
>>>>>>> Stashed changes
            $table->string("status_peminjaman");
            $table->integer("nomor_peminjaman");
            $table->date("tanggal_peminjaman");
            $table->time("start_time");
            $table->time("finish_time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
        Schema::dropIfExists('peminjaman');
    }
};
