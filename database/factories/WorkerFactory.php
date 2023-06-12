<?php

namespace Database\Factories;

use App\Models\Shelter;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Worker::class;
    
    public function definition(): array
    {
        return [
            'shelter_id' => Shelter::factory(),
            'name' => $this->faker->firstName,
        ];
    }
}
