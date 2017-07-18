<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuentes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('year_fuente');
            $table->string('item_fuente', 2)->nullable();
            $table->string('des_fuente', 80)->nullable();
            $table->double('ant_fuente');
            $table->double('dev_fuente');
            $table->double('porc_fuente');
            $table->string('est_fuente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fuentes');
    }
}
