<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
    		['id' => 1, 'title' => 'Education', 'description' => 'Lorem Ipsum Dolor', 'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'name' => 'default.png'],
    		['id' => 2, 'title' => 'Business Development', 'description' => 'Lorem Ipsum Dolor', 'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'name' => 'default.png'],
    		['id' => 3, 'title' => 'Business Models', 'description' => 'Lorem Ipsum Dolor', 'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'name' => 'default.png'],
    		['id' => 4, 'title' => 'Marketing', 'description' => 'Lorem Ipsum Dolor', 'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'name' => 'default.png'],
    		['id' => 5, 'title' => 'Product Development', 'description' => 'Lorem Ipsum Dolor', 'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'name' => 'default.png'],
    	]);
    }
}
