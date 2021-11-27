<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->word,
        'photorally_division_id' => $this->faker->word,
        'transport_division_id' => $this->faker->word,
        'schedule' => $this->faker->word,
        'departure_spot' => $this->faker->word,
        'departure_at' => $this->faker->word,
        'return_spot' => $this->faker->word,
        'return_at' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
