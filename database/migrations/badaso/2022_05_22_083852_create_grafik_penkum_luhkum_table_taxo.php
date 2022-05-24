<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrafikpenkumluhkumTableTaxo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::create('grafik_penkum_luhkum', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->autoIncrement();
			$table->text('foto');
			$table->text('keterangan')->nullable(true);
			$table->timestamps();
        });

        } catch (PDOException $ex) {
            $this->down();
            throw $ex;
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grafik_penkum_luhkum');
    }
}
