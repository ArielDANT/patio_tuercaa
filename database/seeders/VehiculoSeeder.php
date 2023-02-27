<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehiculos')->insert([
            'emp_id'=>1,
            'veh_marca'=>'LAMBORGHINI',
            'veh_modelo'=>'AVENTADOR',
            'veh_anio'=>'2023',
            'veh_kilometraje'=>'0',
            'veh_subtipo'=>'Sport',
            'veh_color'=>'Negro'
        ]);
    }
}
