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
        Schema::create('data_keuntungan', function (Blueprint $table) {
            $table->id();
            $table->integer('pembeli'); // Perbaikan: Ganti int dengan integer
            $table->integer('keuntungan'); // Perbaikan: Ganti int dengan integer
            $table->date('tanggal'); // Perbaikan: Gunakan date untuk tipe tanggal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_keuntungan');
    }
};
