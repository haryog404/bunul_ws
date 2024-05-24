<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administratifs', function (Blueprint $table) {
            $table->id('id_pengajuan');
            $table->string('nama_pengajuan');
            $table->string('nik_pengajuan');
            $table->string('kk_pengajuan');
            $table->string('alamat_pengajuan');
            $table->text('tujuan_pengajuan');
            $table->integer('jenis_pengajuan');
            $table->string('no_hp');
            $table->longText('catatan_pengajuan');
            $table->integer('verifikasi_pengajuan')->default(0);
            $table->timestamps();
        });
        DB::table('administratifs')->insert([
            'nama_pengajuan' => 'John Doe',
            'nik_pengajuan' => '1234567890123456',
            'kk_pengajuan' => '1234567890123456',
            'alamat_pengajuan' => 'Jl. Contoh No. 123',
            'tujuan_pengajuan' => 'Pembuatan KTP',
            'jenis_pengajuan' => 1,
            'no_hp' => '081234567890',
            'catatan_pengajuan' => 'Catatan contoh untuk pengajuan',
            'created_at' => Carbon::now()
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administratifs');
    }
};
