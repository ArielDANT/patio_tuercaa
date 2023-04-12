<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario_det', function (Blueprint $table) {
            $table->id('ivd_id');
            $table->foreignId('ive_id')->references('ive_id')->on('inventario');
            $table->foreignId('veh_id')->references('veh_id')->on('vehiculos');
            $table->integer('ivd_cantidad');
            //$table->float('ivd_vu');
            $table->string('ivd_estado')->default('NUEVO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario_det');
    }
}
