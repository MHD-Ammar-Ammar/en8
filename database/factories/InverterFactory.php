<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// Start Ammar code
use App\Models\inverter;
use Illuminate\Support\Str;

// End Ammar code

class InverterFactory extends Factory
{
// Start Ammar code
    /**
     * The name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = inverter::class;
// End Ammar code

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'ip' => $this->faker->ipv4,
            'warnings' => $this->faker->randomElement(['0' ,'1', '2']),
            // 'created_at' => $this->date_create,
            // 'updated_at' => $this->date_create,
        ];
    }
}
