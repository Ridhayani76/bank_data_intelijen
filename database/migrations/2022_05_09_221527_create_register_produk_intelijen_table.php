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
        Schema::create('register_produk_intelijen', function (Blueprint $table) {
            $table->id();
            $table->string('jenis produk');
            $table->string('nomor surat');
            $table->date('tanggal surat');
            $table->string('subdit')->nullable();
            $table->string('perihal');
            $table->string('disposisi')->nullable();
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
        Schema::dropIfExists('register_produk_intelijen');
    }
};
