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
        Schema::create('info_tingkat_pendidikan', function (Blueprint $table) {
            $table->integer('id_info_tingkat_pendidikan')->autoIncrement();
            $table->integer('id_info_loker');
            $table->string('nama_tingkat_pendidikan');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('id_info_loker')
                ->references('id_info_loker')
                ->on('info_loker')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_tingkat_pendidikan');
    }
};
