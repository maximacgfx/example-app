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
     * https://github.com/fzaninotto/Faker#fakerproviderdatetime
     *
     * @return array
     */
    public function definition()
    {
        return [

            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' =>$this->faker->phoneNumber,
            'dob' => $this->faker->dateTimeBetween($startDate = '-34 years', $endDate = '-20 years', $timezone = null)

        ];
    }
}
