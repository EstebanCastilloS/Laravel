<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //crear 20 usuarios
        User::factory(20)->create();

        User::factory()->create([
            'name' => 'Naun Castillo',
            'email' => 'naunestebancastillo@gmail.com',
            'password' => bcrypt('11111111'),
        ]);
    }
}
