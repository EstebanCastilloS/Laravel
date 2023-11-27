<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder
;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear 5 usuarios

        //crear un usuario manualmente
        User::create([
            'name' => 'Esteban Castillo',
            'email' => 'naunestebancastillo@gmail.com',
            'password' => bcrypt('11111111'),
        ]);

    }
}
