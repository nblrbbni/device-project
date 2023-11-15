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
<<<<<<< HEAD:database/migrations/2023_11_09_005610_create_student_table.php
        Schema::create('student', function (Blueprint $table) {
=======
        Schema::create('create_siswa', function (Blueprint $table) {
>>>>>>> vincent:database/migrations/2023_11_07_032412_create_siswa_table.php
            $table->id();
            $table->string('name');
            $table->integer('class');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD:database/migrations/2023_11_09_005610_create_student_table.php
        Schema::dropIfExists('student');
=======
        Schema::dropIfExists('create_siswa');
>>>>>>> vincent:database/migrations/2023_11_07_032412_create_siswa_table.php
    }
};
