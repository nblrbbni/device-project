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
        $table->id();
        $table->fk("peminjaman_id");
        $table->time("waktu_selesai");
        $table->fk("persetujuan_user_id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
