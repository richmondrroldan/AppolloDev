<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('skills')->insert([
    		['id' => 1, 'title' => 'Education'],
    		['id' => 2, 'title' => 'Business Development'],
    		['id' => 3, 'title' => 'Business Models'],
    		['id' => 4, 'title' => 'Marketing'],
    		['id' => 5, 'title' => 'Product Development'],
    		['id' => 6, 'title' => 'Business Operations'],
    		['id' => 7, 'title' => 'Operations'],
    		['id' => 8, 'title' => 'Community Building'],
    		['id' => 9, 'title' => 'Customer Development'],
    		['id' => 10, 'title' => 'Communications'],
    		['id' => 11, 'title' => 'Public Relations'],
    		['id' => 12, 'title' => 'Web Development'],
    		['id' => 13, 'title' => 'Basic Accounting and Money Management'],
    		['id' => 14, 'title' => 'Time and Stress Management'],
    		['id' => 15, 'title' => 'Network and Relationship Building'],
    		['id' => 16, 'title' => 'Social Media Management'],
    		['id' => 17, 'title' => 'Research'],
    		['id' => 18, 'title' => 'Networking and Collaboration'],

    	]);
    }
}
