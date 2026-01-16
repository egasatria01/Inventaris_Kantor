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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('nama_barang');
            $table->string('no_seri')->nullable();
            $table->string('barcode')->nullable();
            $table->string('status_barang');
            $table->string('stok');
            $table->foreignId('kategori_barang_id')->constrained('kategori_barangs')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
