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
        Schema::create('register_penerangan_penyuluhan', function (Blueprint $table) {
            $table->id();
            $table->string('surat perintah');
            $table->string('sasaran kegiatan');
            $table->dateTime('waktu', $precision = 0);
            $table->string('tempat');
            $table->string('materi');
            $table->string('jumlah peserta');
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
        Schema::dropIfExists('register_penerangan_penyuluhan');
    }
};
