<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->integer('id_fasilitas')->autoIncrement();
            $table->enum('kategori_fasilitas', ['gml_1', 'bdg_2', 'psg_3', 'jbk_4','polymer_ckr','polymer_bdg','metal_ckr'])->nullable();
            $table->string('nama_item');
            $table->integer('qty_item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
