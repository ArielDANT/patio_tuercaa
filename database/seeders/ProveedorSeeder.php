<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('proveedores')->insert([             
           'pro_nombres'=>'Luna Cristina',
           'pro_apellidos'=>'Suasnavas Caiza',
           'pro_direccion'=>'La Cocha',
           'pro_telefono'=>'782374783',      
           'pro_correo'=>'lunin@vn.com',             
           'pro_cedula'=>'8347483745',
           'pro_descripcion'=>'La mejor proveedora'
        ]);
    }
}
