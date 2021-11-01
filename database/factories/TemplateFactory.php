<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class TemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   

        $category = $this->faker->realText(rand(20, 30));

        return [

        //------------------------------------------------//
            'title' => $faker->sentence(mt_rand(3, 10)),
            'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
            'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
        //------------------------------------------------//

            'name' => $category,
            'content' => $this->faker->realText(rand(200, 500)),
            'slug' => Str::slug($category),
        //------------------------------------------------//

            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password' => bcrypt('secret'), // secret
            'remember_token' => Str::random(10),
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//
        //------------------------------------------------//

        ];
    }


}
