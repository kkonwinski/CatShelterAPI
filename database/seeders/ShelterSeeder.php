<?php

namespace Database\Seeders;

use App\Models\Shelter;
use Illuminate\Database\Seeder;

class ShelterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shelter::factory()
            ->count(20)
            ->hasCats(40)
            ->hasWorkers(6)
            ->create();
    }
}
