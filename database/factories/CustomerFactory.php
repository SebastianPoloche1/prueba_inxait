<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'personal_id' => $this->faker->unique()->numberBetween($min = 60422435, $max = 1090000000),
            'state' => 'Caldas',
            'city' => $this->faker->randomElement(['Villamaria', 'Manizales', 'Chinchiná']),
            'phone' => $this->faker->numberBetween($min = 3000000000, $max = 3300000000),
            'email' => $this->faker->unique()->email(),
            'habeas_data' => 1
        ];
    }
}
