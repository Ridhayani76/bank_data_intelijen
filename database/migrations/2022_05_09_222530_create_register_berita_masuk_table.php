<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register_berita_masuk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->nullable();
            $table->string('nomor berita')->nullable();
            $table->date('tanggal berita')->nullable();
            $table->string('dari')->nullable();
            $table->string('kepada')->nullable();
            $table->string('perihal')->nullable();
            $table->dateTime('tgl_jam_diterima', $precision = 0)->nullable();
            $table->integer('jumlah_halaman')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_berita_masuk');
    }
};
