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
<<<<<<< Updated upstream
            $table->foreign("peminjaman_id")->references("id")->on("peminjaman");
            $table->time("waktu_selesai");
            $table->foreign("persetujuan_user_id")->references("id")->on("user");
            $table->timestamps();
        });

=======
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
        Schema::dropIfExists('pengembalian');
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    }
};
