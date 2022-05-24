<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterPetaideologiTablePdlo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        try {

                    Schema::table('peta_ideologi', function (Blueprint $table) {
            $table->text('keterangan')->nullable(true);
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
        Schema::table('peta_ideologi', function (Blueprint $table) {
            $table->dropColumn('keterangan');
        });


    }
}
