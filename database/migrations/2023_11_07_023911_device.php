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
        $table->string("nama_perangkat");
        $table->string("kondisi_perangkat");
        $table->integer("stok");
        $table->fk("kategori_id");
=======
        Schema::create('device', function (Blueprint $table) {
            $table->id();
            $table->string("nama_perangkat");
            $table->string("kondisi_perangkat");
            $table->integer("stok");
            $table->integer("kategori_id");
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
        Schema::dropIfExists('device');
>>>>>>> Stashed changes
    }
};
