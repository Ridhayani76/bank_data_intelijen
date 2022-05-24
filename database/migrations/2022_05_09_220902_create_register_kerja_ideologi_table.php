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
        Schema::create('register_kerja_ideologi', function (Blueprint $table) {
            $table->id();
            $table->date('waktu diterima');
            $table->string('sumber');
            $table->string('informasi')->nullable();
            $table->text('uraian peristiwa');
            $table->string('catatan')->nullable();
            $table->string('disposisi')->nullable();
            $table->string('tindak lanjut')->nullable();
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
        Schema::dropIfExists('register_kerja_ideologi');
    }
};
