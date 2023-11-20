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

=======
>>>>>>> Stashed changes
        Schema::create('device_peminjaman', function (Blueprint $table) {
            $table->id();
            $table->integer("device_id");
            $table->integer("peminjaman_id");
            $table->timestamps();
        });
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_peminjaman');
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
    }
};
