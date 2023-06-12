<?php

namespace Database\Factories;

use App\Models\Cat;
use App\Models\Shelter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Cat::class;

    public function definition(): array
    {
        return [
            'shelter_id' => Shelter::factory(),
            'name' => $this->faker->firstName,
        ];
    }
}
