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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string("nama_user");
            $table->integer("password");
<<<<<<< Updated upstream
            $table->foreign("level_id")->references("id")->on("level");
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


        Schema::dropIfExists('user');

=======
        Schema::dropIfExists('user');
>>>>>>> Stashed changes
    }
};
