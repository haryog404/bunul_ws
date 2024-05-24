<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('email');
            $table->string('password');
            $table->timestamps();
        });
        DB::table('admins')->insert(
            [
                'email' => 'irgiganteng@gmail.com',
                'password' => Hash::make('11111111'),
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
