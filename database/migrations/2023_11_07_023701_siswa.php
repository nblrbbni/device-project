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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
<<<<<<< Updated upstream
            $table->foreign("kelas_id")->references("id")->on("kelas");
            $table->timestamps();
        });


=======
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
        Schema::dropIfExists('siswa');
    }
};
