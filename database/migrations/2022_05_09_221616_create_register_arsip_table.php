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
        Schema::create('register_arsip', function (Blueprint $table) {
            $table->id();
            $table->date('waktu terima');
            $table->string('diterima dari');
            $table->string('nomor');
            $table->date('tanggal surat');
            $table->string('perihal');
            $table->string('lampiran')->nullable();
            $table->string('kode penyimpanan')->nullable();
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
        Schema::dropIfExists('register_arsip');
    }
};
