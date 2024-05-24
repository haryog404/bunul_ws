<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->string('nama_pelapor')->default("Orang Anonim");
            $table->integer('klasifikasi_laporan');
            $table->string('judul_laporan');
            $table->longText('isi_laporan');
            $table->date('tgl_kejadian');
            $table->string('lokasi_kejadian');
            $table->longText('balasan_admin')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
        DB::table('laporans')->insert([
            'nama_pelapor' => 'Imam Akheer Zaman',
            'klasifikasi_laporan' => 1,
            'judul_laporan' => 'Kemalingan',
            'isi_laporan' => 'Tolong Blok C diperketat keamanannya',
            'tgl_kejadian' => '2023-12-20',
            'lokasi_kejadian' => 'Bunulrejo',
            'balasan_admin' => 'baik akan dikerjakan > eh tapi tunggu dulu > oiya ya',
            'created_at' => Carbon::now()
        ]);
        DB::table('laporans')->insert([
            'nama_pelapor' => 'Hafizh Kalasan',
            'klasifikasi_laporan' => 1,
            'judul_laporan' => 'Kemalingan',
            'isi_laporan' => 'Tolong Blok C diperketat keamanannya',
            'tgl_kejadian' => '2023-12-20',
            'lokasi_kejadian' => 'Bunulrejo',
            'created_at' => Carbon::now()
        ]);
        DB::table('laporans')->insert([
            'nama_pelapor' => 'Pak Irfan Ganteng',
            'klasifikasi_laporan' => 1,
            'judul_laporan' => 'Kemalingan',
            'isi_laporan' => 'Tolong Blok C diperketat keamanannya',
            'tgl_kejadian' => '2023-12-20',
            'lokasi_kejadian' => 'Bunulrejo',
            'created_at' => Carbon::now()
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
