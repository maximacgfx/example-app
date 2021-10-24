<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use App\Models\NewsTag;


class NewsTagPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // создать связи между постами и тегами

        // dd(News::first()->tags());
        // dd(NewsTag::first()->news());

        // $this->table ='news_tags_pivot';
        


        foreach(News::all() as $post) {
            foreach(NewsTag::all() as $tag) {
                if (rand(1, 20) == 10) {
                    $post->tags()->attach($tag->id);
                }
            }
        }
    }
    
}
