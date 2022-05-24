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
        Schema::create('register_pph_ppm', function (Blueprint $table) {
            $table->id();
            $table->string('nama petugas')->nullable();
            $table->dateTime('waktu', $precision = 0);
            $table->string('identitas');
            $table->string('nama organisasi')->nullable();
            $table->text('informasi');
            $table->string('surat')->nullable();
            $table->string('tanda tangan')->nullable();
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
        Schema::dropIfExists('register_pph_ppm');
    }
};
