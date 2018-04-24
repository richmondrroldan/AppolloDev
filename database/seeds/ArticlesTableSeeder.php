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
    		['id' => 1, 
            'title' => 'The Journey: Winning the Benilde Prize 3.0', 
            'description' => 'The Benilde Prize empowers students who want to become agents of social change. When you win, we’ll help fund your idea and turn it into a sustainable social enterprise.', 
                'name' => 'bp-winner.png', 
                'link' => 'https://goo.gl/XHh5ND'],

    		['id' => 2, 
            'title' => 'All set for Benilde Prize 3.0 Ideation Bootcamp!', 
            'description' => 'Ideation Bootcamp is the last Bootcamp before the Benilde Prize finals.', 
                'name' => 'bp-bootcamp.png', 
                'link' => 'https://goo.gl/Gj6HBg'],

            ['id' => 3, 
            'title' => '#StartUpJournal2: How Am I Surviving the Start-up Culture?', 
            'description' => 'Hello self and hello to my fellow readers! It has been quite long since I have expressed my thoughts with my #StartUpJournal.', 
                'name' => 'kath.jpeg', 
                'link' => 'https://goo.gl/Q1HiXM'],
    	]);
    }
}
