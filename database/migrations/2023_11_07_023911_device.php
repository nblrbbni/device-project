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
        Schema::create('device', function (Blueprint $table) {
            $table->id();
            $table->string("nama_perangkat");
            $table->string("kondisi_perangkat");
            $table->integer("stok");
<<<<<<< Updated upstream
            $table->foreign("kategori_id")->references("id")->on("kategori");
            $table->timestamps();
        });


=======
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

=======
>>>>>>> Stashed changes
        Schema::dropIfExists('device');
    }
};
