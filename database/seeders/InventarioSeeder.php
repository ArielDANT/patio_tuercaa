<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inventario')->insert([  
            'pro_id'=>1,           
            'ive_fecha'=>'12/09/22',
            'ive_documento'=>'Mi documento'
            ]); 
    }
}
