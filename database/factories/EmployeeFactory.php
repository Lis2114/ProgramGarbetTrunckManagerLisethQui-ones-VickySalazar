<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'identification' => strval($this->faker->numberBetween(1000000, 1100000000)),
            'type' => $this->faker->randomElement(['Conductor', 'Recolector', 'Barrendero', 'Clasificador']),
        ];
    }
}
