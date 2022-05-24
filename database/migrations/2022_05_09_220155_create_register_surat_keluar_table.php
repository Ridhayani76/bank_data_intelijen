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
        Schema::create('register_surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal terima');
            $table->string('nomor surat');
            $table->string('kepada');
            $table->string('perihal');
            $table->string('lampiran')->nullable();
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
        Schema::dropIfExists('register_surat_keluar');
    }
};
