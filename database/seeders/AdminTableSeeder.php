<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Administrador',
            'email'=>'admin@ca.com.br',
            'password'=>bcrypt('pk2k3@noslimde')
        ]);
       
        Admin::create([
            'name'=>'2-Admnistrator',
            'email'=>'admin2@ca.com.br',
            'password'=>bcrypt('987654321')
        ]);     
        
        Admin::create([
            'name'=>'Usuario Sistema',
            'email'=>'edmilson.joaquim@ca.com.br',
            'password'=>bcrypt('123456789')
        ]);       
    }
}
