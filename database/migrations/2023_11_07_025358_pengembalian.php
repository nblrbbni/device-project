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
        $table->fk("peminjaman_id");
        $table->time("waktu_selesai");
        $table->fk("persetujuan_user_id");
=======
        Schema::create('pengembalian', function (Blueprint $table) {
            $table->id();
            $table->integer("peminjaman_id");
            $table->time("waktu_selesai");
            $table->integer("persetujuan_user_id");
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
        Schema::dropIfExists('pengembalian');
>>>>>>> Stashed changes
    }
};
