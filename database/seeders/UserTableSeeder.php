<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
            'name'=>'Forseti Soluções',
            'email'=>'usuario@forseti.com.br',
            'password'=>bcrypt('12345')
        ]);

       User::create([
            'name'=>'Forseti 2 Soluções',
            'email'=>'solucoes@forseti.com.br',
            'password'=>bcrypt('67890')
        ]);
    }
}
