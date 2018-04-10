<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds. id name email utype password interests bio profilepic
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

        DB::table('users')->insert([
    		['id' => 1, 'name' => 'Richard Blane', 'email' => 'richardblane@exmaple.com', 'uType' => '2',  'password' => bcrypt('qweasd'), 'background' => 'HIFI', 'interests' => 'Education', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
    		['id' => 2, 'name' => 'David Nicanor', 'email' => 'davidnic@example.com', 'uType' => '2',  'password' => bcrypt('qweasd'), 'background' => 'HIFI', 'interests' => 'Education', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
    		['id' => 3, 'name' => 'Peter Pan', 'email' => 'peterp@example.com', 'uType' => '2',  'password' => bcrypt('qweasd'), 'background' => 'HIFI', 'interests' => 'Education', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
    		['id' => 4, 'name' => 'Nic Young', 'email' => 'nic.y@example.com', 'uType' => '2',  'password' => bcrypt('qweasd'), 'background' => 'HIFI', 'interests' => 'Education', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
    		['id' => 5, 'name' => 'Jade Clarkson', 'email' => 'jclark@example.com', 'uType' => '2',  'password' => bcrypt('qweasd'), 'background' => 'HIFI', 'interests' => 'Education', 'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
    	]);
    }
}
