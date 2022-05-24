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
        Schema::create('register_ekspedisi_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nomor surat');
            $table->date('tanggal surat');
            $table->string('kepada');
            $table->string('perihal');
            $table->string('lampiran')->nullable();
            $table->time('waktu terima', $precision = 0)->nullable();
            $table->string('nama penerima')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register_ekspedisi_surat');
    }
};
