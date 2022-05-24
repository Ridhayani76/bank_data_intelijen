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
        Schema::create('register_telaahan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor berita');
            $table->date('tanggal berita');
            $table->string('pembuat');
            $table->string('perihal');
            $table->string('lampiran')->nullable();
            $table->string('tindak lanjut');
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
        Schema::dropIfExists('register_telaahan');
    }
};
