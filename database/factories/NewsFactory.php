<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;
use DB;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(3, 6));
        $image = 'img' . rand(1,4) .'.jpg';
        
        return [
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 15),
            'title' => $title,

            // 'excerpt' => $this->faker->realText(rand(300, 400)),
            // 'content' => $this->faker->realText(rand(400, 500)),


            'excerpt' => $this->faker->realText(rand(100, 200)),
            'content' => join("\n\n", $this->faker->paragraphs(mt_rand(3, 6))),


            'slug' => Str::slug(substr($title,0,30)),
            'published_by' => rand(1, 10),
            'published_at' => $this->faker->dateTimeBetween('-1 month', '+10 days'),
            'image' => $image,

        ];


        //  //------------------------------------------------//
        //  'title' => $faker->sentence(mt_rand(3, 10)),
        //  'content' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        //  'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
        //  //------------------------------------------------//

        //  'name' => $category,
        //  'content' => $this->faker->realText(rand(200, 500)),
        //  'slug' => Str::slug($category),
    }

    public function configure()
    {
        return $this->afterMaking(function ( ) {
            //
            // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        })->afterCreating(function ( ) {
            //
            // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        });
    }
}
