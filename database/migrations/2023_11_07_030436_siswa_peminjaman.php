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
<<<<<<< Updated upstream
        $table->id();
        $table->integer("siswa_id");
        $table->integer("peminjaman_id");
=======
        Schema::create('siswa_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->integer("siswa_id");
            $table->integer("peminjaman_id");
            $table->timestamps();
        });
>>>>>>> Stashed changes
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< Updated upstream
        //
=======
        Schema::dropIfExists('siswa_peminjaman');
>>>>>>> Stashed changes
    }
};
