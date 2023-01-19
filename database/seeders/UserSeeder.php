<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'usu_usuario'=>'SuperAdmin',
           'usu_perfil'=>'Administrador',
           'epl_id'=>1,
           'password'=>bcrypt('12345678'),
           'created_at'=>date('Y-m-d')
        ]);
        //
    }
}
