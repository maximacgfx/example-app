<?php

namespace Database\Factories;

use App\Models\NewsCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class NewsCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = $this->faker->realText(rand(20, 30));

        return [
            'name' => $category,
            'content' => $this->faker->realText(rand(200, 500)),
            'slug' => Str::slug($category),
        ];
    }
}
