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
        Schema::create('produk', function (Blueprint $table) {
            $table->integer('id_produk')->autoIncrement();
            $table->string('nama_produk');
            $table->enum('kategori_produk', ['metal', 'plastik', 'non_otomotif'])->nullable();
            $table->enum('jenis_produk', ['kendaraan_roda_2', 'kendaraan_roda_4', 'non_otomotif'])->nullable();
            $table->text('foto_produk');
            $table->string('pt_produksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
