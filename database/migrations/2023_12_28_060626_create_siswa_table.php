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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16);
            $table->string('nis', 10)->nullable();
            $table->string('nama');
            $table->string('email')->nullable();
            $table->string('tlp_siswa')->nullable();
            $table->enum('jk', ['Laki-Laki', 'Perempuan']);
            $table->string('provinsi');
            $table->string('kabkot');
            $table->string('kec');
            $table->string('keldes');
            $table->string('alamat');
            $table->string('ayah');
            $table->string('ibu');
            $table->string('wali');
            $table->string('tlp_wali');
            $table->string('krj_ayh');
            $table->string('krj_ibu');
            $table->integer('penghasilan_ortu')->nullable();
            $table->string('thn_msk');
            $table->string('sklh_asal')->nullable();
            $table->integer('kelas')->nullable();
            $table->integer('subject')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
