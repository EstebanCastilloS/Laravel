<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genero = ["Masculino", "Femenino", "Otro"];
        $status = ['active', 'inactive'];
        $ministerio = ["Jovenes", "Niños", "Adolescentes", "Adultos", "Ancianos"];


        return [


            'full_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->dateTime(),
            'gender' => $genero[rand(0, 2)],
            'email' => $this->faker->unique()->safeEmail(),
            'status' => $status[rand(0, 1)],
            'ministry' => $ministerio[rand(0, 4)],
            'photo' => '',
            'date_admission' => $this->faker->dateTime(),

        ];
    }
}
