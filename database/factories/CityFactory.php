<?php

namespace Database\Factories;

use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class CityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $count_states = 32;
        return [
            'name' => $this->faker->unique()->City(),
            'state_id' => $this->faker->numberBetween($min = 1, $max =  $count_states)
        ];
    }
}
