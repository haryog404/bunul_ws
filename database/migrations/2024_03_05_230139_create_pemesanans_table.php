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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id('id_pemesanan');
            $table->unsignedBigInteger('id_warga');
            $table->foreign('id_warga')->references('id_warga')->on('wargas')->onDelete('cascade');
            $table->unsignedBigInteger('id_aset');
            $table->foreign('id_aset')->references('id_aset')->on('asets')->onDelete('cascade');
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
