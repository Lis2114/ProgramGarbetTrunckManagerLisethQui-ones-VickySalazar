<?php

namespace Database\Factories;

use App\Models\Path;
use App\Models\Truck;
use App\Models\Employee;
use Dotenv\Store\File\Paths;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hourExit' => $this->faker->dateTime()->format('H:i:s'),
            'hourArrival' => $this->faker->dateTime()->format('H:i:s'),
            'date' => $this->faker->dateTimeBetween('-1 years', 'now')->format('Y-m-d'),
            'route_id' => function () {
                return Path::inRandomOrder()->first()->id;
            },
            'employee_id' => function () {
                return Employee::inRandomOrder()->first()->id;
            },
            'truck_id' => function () {
                return Truck::inRandomOrder()->first()->id;
            }
        ];
    }
}
