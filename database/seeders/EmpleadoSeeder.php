<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empleados')->insert([
           'epl_nombres'=>'Ariel Jair',
           'epl_apellidos'=>'Muñoz Proaño',
           'epl_cedula'=>'1754827683',
           'epl_direccion'=>'Eden del Sur',
           'epl_correo'=>'ari@vn.com'
]);
    }
}
