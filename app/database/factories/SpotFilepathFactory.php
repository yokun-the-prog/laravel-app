<?php

namespace Database\Factories;

use App\Models\SpotFilepath;
use Illuminate\Database\Eloquent\Factories\Factory;

class SpotFilepathFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SpotFilepath::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'spot_id' => $this->faker->word,
        'highlight_path' => $this->faker->word,
        'route_path' => $this->faker->word,
        'photorally_path' => $this->faker->word,
        'title' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
