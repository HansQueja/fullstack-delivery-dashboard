<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;
use App\Models\DrugTestResult;
use App\Models\Violation;
use App\Models\Feedback;
use App\Models\Credential;
use App\Models\Infraction;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create 10 drivers
        Driver::factory()
            ->count(10)
            ->create()
            ->each(function ($driver) {
                // For each driver, create related records
                DrugTestResult::factory()->count(rand(1, 5))->create(['driver_id' => $driver->id]);
                Violation::factory()->count(rand(0, 3))->create(['driver_id' => $driver->id]);
                Feedback::factory()->count(rand(1, 4))->create(['driver_id' => $driver->id]);
                Credential::factory()->count(rand(1, 3))->create(['driver_id' => $driver->id]);
                Infraction::factory()->count(rand(0, 2))->create(['driver_id' => $driver->id]);
            });
    }
}
