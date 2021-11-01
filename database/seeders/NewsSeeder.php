<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        

        News::factory()
        ->count(55)                
        ->create();

    }
}
