<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Article::factory()->count(30)->create();
        //factory(App\Article::class, 30)->create();
        //Article::factory(30)->create();
    }
}