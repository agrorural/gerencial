<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_empresa', 5)->nullable();
            $table->string('des_empresa', 80)->nullable();
            $table->string('id_year', 4)->nullable();
            $table->string('id_month', 2)->nullable();
            $table->string('id_tipo_persona', 2)->nullable();
            $table->string('des_tipo_persona', 80)->nullable();
            $table->decimal('imp_remuneracion', 10, 0)->nullable();
            $table->decimal('imp_patronal', 10, 0)->nullable();
            $table->decimal('total_persona', 10, 0)->nullable();
            $table->date('fec_persona')->nullable();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
