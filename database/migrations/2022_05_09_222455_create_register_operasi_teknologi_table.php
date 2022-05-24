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
        Schema::create('register_operasi_teknologi', function (Blueprint $table) {
            $table->id();
            $table->string('sektor');
            $table->string('nomor');
            $table->date('tanggal');
            $table->string('disposisi');
            $table->text('nama petugas');
            $table->string('hasil')->nullable();
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
        Schema::dropIfExists('register_operasi_teknologi');
    }
};
