<?php

namespace Database\Factories;

use App\Models\Incidence;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incidence>
 */
class IncidenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'userName' => $this->faker->firstName(),
            'category' => $this->faker->firstName(),
            'area' => $this->faker->firstName(),
            'location' => $this->faker->firstName(),
            'description' => $this->faker->firstName(),
            'state' => $this->faker->firstName(),
        ];
    }
}
