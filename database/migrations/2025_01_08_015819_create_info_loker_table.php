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
        Schema::create('info_loker', function (Blueprint $table) {
            $table->integer('id_info_loker')->autoIncrement();
            $table->string('nama_perusahaan');
            $table->string('posisi_pekerjaan');
            $table->enum('departemen', ['Marketing', 'Engineering', 'Human_Resource', 'Production', 'General_Affair', 'Moldshop', 'Diesshop', 'Purchasing', 'Repair_Maintanance', 'Quality_Control', 'Information_Technology', 'Finance', 'Health_Safety_Environment', 'Quality_Management_System', 'Production_Planning_Inventory_Control'])->nullable();
            $table->enum('lokasi_penempatan', ['Cikarang', 'Bandung'])->nullable();
            $table->string('durasi_kerja');
            $table->datetime('periode_lamar_berakhir');
            $table->enum('jenis_pekerjaan', ['Fulltime', 'Internship'])->nullable();
            $table->enum('metode_kerja', ['Onsite', 'WFA'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_loker');
    }
};
