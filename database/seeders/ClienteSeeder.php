<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clientes')->insert([
        'cli_nombres'=>'Belén',
        'cli_apellidos'=>'Vaca',
        'cli_cedula'=>'2377382237',
        'cli_direccion'=>'El beaterio',
        'cli_telefono'=>'0984738474',
        'cli_correo'=>'biencita@vn.com'
    ]);
    }
}
