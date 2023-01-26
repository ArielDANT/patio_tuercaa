<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('pro_id');
            $table->string('pro_nombres');
            $table->string('pro_apellidos');
            $table->string('pro_direccion');
            $table->string('pro_telefono');
            $table->string('pro_correo')->unique();
            $table->string('pro_cedula')->unique();
            $table->string('pro_descripcion');
            $table->string('pro_estado')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
}
