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
        Schema::create('register_surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal terima');
            $table->time('jam terima', $precision = 0);
            $table->string('nomor surat');
            $table->date('tanggal surat');
            $table->string('asal surat');
            $table->string('perihal');
            $table->date('tanggal disposisi')->nullable();
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
        Schema::dropIfExists('register_surat_masuk');
    }
};
