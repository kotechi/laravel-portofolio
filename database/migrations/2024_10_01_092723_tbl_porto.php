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
        Schema::create('tbl_porto', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi');
            $table->string('judul');
            $table->integer('umur');
            $table->string('tanggal_lahir');
            $table->string('city');
            $table->text('deskripsi2');
            $table->string('freelance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
