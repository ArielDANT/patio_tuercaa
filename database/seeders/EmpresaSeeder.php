<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('empresa')->insert([             
            'emp_nombre'=>'Patio Tuercaa',
            'emp_ruc'=>'1110178653',
            'emp_telefono'=>'09988448',
            'emp_direccion'=>'Guamani',
            'emp_correo'=>'info@patiotuercaa.com'             
        ]);
    }
}
