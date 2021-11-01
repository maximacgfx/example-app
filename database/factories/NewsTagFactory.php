<?php

namespace Database\Factories;

use App\Models\NewsTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

class NewsTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = NewsTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->realText(rand(15, 30));
        
        return [
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
