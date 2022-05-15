<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Start Ammar code
use App\Models\memorey;
use Illuminate\Support\Str;

// End Ammar code

class MemoreyFactory extends Factory
{
    // Start Ammar code
    /**
     * The name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = memorey::class;
// End Ammar code

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'inv_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
            'device_sn' => $this->faker->name,
            'grid_voltage' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'grid_frequency' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'ac_output_voltage' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'ac_output_frequency' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'ac_output_apparent_power' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'ac_output_apparent_active' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'output_load_percent' => $this->faker->numberBetween(0, 100),
            'bus_voltage' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'battery_voltage' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'battery_charging_current' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'inverter_heat_sink_temperature' => $this->faker->randomElement([100, 200, 300, 400, 500, 600]),
            'rssi' => $this->faker->randomElement([10.84, 20.5, 30.6, 40.8, 50.4, 60.9]),
        ];
    }
}
