<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventario', function (Blueprint $table) {
            $table->id('ive_id');
            $table->foreignId('pro_id')->references('pro_id')->on('proveedores');
            $table->date('ive_fecha');
            $table->string('ive_documento');
            $table->integer('ive_estado')->default(1);
        });
    }
    //enc_inventario/
    //eci_id
    //pro_id//
    //eci_fecha
    //eci_documento
    //eci_estado


    //det_inventario/
    //dti_id
    //eci_id//
    //veh_id//
    //dti_cantidad
    //dti_valorunitario
    //dti_estado

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventario');
    }
}
