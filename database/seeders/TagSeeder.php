<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsTag;


class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsTag::factory()
        ->count(30)                
        ->create();
    }
}
