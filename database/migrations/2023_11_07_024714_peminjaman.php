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
        $table->fk("siswa_id");
        $table->fk("lab_id");
        $table->fk("device_id");
        $table->fk("user_id");
        $table->string("status_peminjaman");
        $table->integer("nomor_peminjaman");
        $table->date("tanggal_peminjaman");
        $table->time("start_time");
        $table->time("finish_time");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
