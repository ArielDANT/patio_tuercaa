<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('veh_id');
            $table->foreignId('emp_id')->references('emp_id')->on('empresa');
            $table->string('veh_marca');
            $table->string('veh_modelo');
            $table->integer('veh_anio');
            $table->float('veh_kilometraje');
            $table->string('veh_subtipo');
            $table->string('veh_color');
            $table->string('veh_estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
