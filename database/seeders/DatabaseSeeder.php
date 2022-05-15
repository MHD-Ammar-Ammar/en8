<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\inverter;
use App\Models\memorey;
use App\Models\log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // Start Ammar code
        // inverter::factory(6)->create();
        // $this->call(InverterSeeder::class);
        memorey::factory(300)->create();
        log::factory(50)->create();
        // End Ammar code

    }
}
