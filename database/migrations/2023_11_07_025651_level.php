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
        $table->string("nama_level");
=======
        Schema::create('level', function (Blueprint $table) {
            $table->id();
            $table->string("nama_level");
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
        Schema::dropIfExists('level');
>>>>>>> Stashed changes
    }
};
