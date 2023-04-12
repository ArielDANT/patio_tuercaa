<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class InventarioDetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inventario_det')->insert([  
            'ive_id'=>1,
            'veh_id'=>1,           
            'ivd_cantidad'=>'12', 
            //'ivd_vu'=>'2'           
            ]);
    }
}
