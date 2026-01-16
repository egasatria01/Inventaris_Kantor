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
        Schema::create('transaksi_barangs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('barang_id')->constrained('barangs');
            $table->string('jenis_transaksi');
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('lokasi_id')->constrained('lokasis');
            $table->string('tmpat_awal');
            $table->string('tmpat_akhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_barangs');
    }
};
