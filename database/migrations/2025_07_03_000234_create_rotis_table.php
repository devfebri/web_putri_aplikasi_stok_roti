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
        Schema::create('rotis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_roti', 200);
            $table->string('rasa_roti', 100);
            $table->text('deskripsi_roti')->nullable();
            $table->string('harga_roti',50);
            // $table->integer('stok_hari_ini');
            // $table->date('tanggal_produksi');
            $table->text('gambar_roti')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rotis');
    }
};
