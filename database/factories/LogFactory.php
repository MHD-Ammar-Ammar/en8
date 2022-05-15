<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

// Start Ammar code
use App\Models\log;
use Illuminate\Support\Str;

// End Ammar code

class LogFactory extends Factory
{
    // Start Ammar code
    /**
     * The name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = log::class;
    // End Ammar code

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'inv_status' => $this->faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10']),
            // 'inv_status' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'inv_status' => $this->faker->numberBetween(1, 10),

            'com_status' => $this->faker->randomElement(['0', '1']),

            // 'inv_status' => $this->faker->numerify('#'),
            // 'inv_status' => $this->faker->random_int(0, 10),

            // 'com_status' => $this->faker->randomElement(['0', '1']),
            // 'created_at' => $this->date_create,
            // 'updated_at' => $this->date_create,
            // 'created_at' => $this->date_create,
            // 'updated_at' => $this->date_create,
        ];
    }
}
