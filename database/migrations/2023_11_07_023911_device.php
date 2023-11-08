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
        $table->string("nama_perangkat");
        $table->string("kondisi_perangkat");
        $table->integer("stok");
        $table->fk("kategori_id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
