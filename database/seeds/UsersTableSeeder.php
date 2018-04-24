<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds. id name email utype password interests about profilepic
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

        DB::table('users')->insert([
            // Sir Jen
    		['id' => 1, 'name' => 'Jenesis Adriano', 'email' => 'jenesis.adriano@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'CIRC-EdTech in Benilde', 'interests' => 'Education, Community Building, Communications, Networking & Collaboration', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'jenadriano.jpg'],
            // Nica
    		['id' => 2, 'name' => 'Alyssa Nicole Mombay', 'email' => 'alyssanicole.mombay@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Center for Inclusive Education in Benilde', 'interests' => 'Education, Communications, Time & Stress Management, Research', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
            // Sir Mark
    		['id' => 3, 'name' => 'Edward Mark Meily', 'email' => 'markmeily@me.com', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Professor in the Digital Film Program of Benilde', 'interests' => 'Education, Business Development, Marketing, Customer Development, Communications, Content Marketing', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'markmeily.jpg'],
            // Sir Jay
    		['id' => 4, 'name' => 'Jay Jaboneta', 'email' => 'jaymichael.jaboneta@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Yellow Boat of Hope Foundation Co-Founder', 'interests' => 'Education, Business Development, Marketing, Community Building, Communications, Public Relations, Time & Stress Management, Network and Relationship Building, Social Media Management, Networking & Collaboration, Pitching, Storytelling, Fundraising', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'jayjaboneta.jpg'],
            // Sir Jag
    		['id' => 5, 'name' => 'Jose Antonio Garcia', 'email' => 'Jaggarcia@benilde.edu.ph ', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Professor in the Digital Film Program of Benilde', 'interests' => 'Education, Marketing, Communications', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
            // Sir Jemai
            ['id' => 6, 'name' => 'Jeremiah So Adriano', 'email' => 'jeremiah.adriano@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Center for Inclusive Education', 'interests' => 'Education, Research, Sociocultural Psychology', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
            // Sir TQ
            ['id' => 7, 'name' => 'Mark Alvin Antiqueno', 'email' => 'mark.antiqueno@gmail.com', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'The Wild Range Founder', 'interests' => 'Education, Marketing, Product Development, Community Building, Communications, Social Media Management, Research', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'tqantiqueno.jpg'],
            // Sir Rex
            ['id' => 8, 'name' => 'Rex Lor', 'email' => 'rex.lor@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Innovation Development and Monitoring at Hub of Innovation for Inlcusion in Benilde', 'interests' => 'Education, Business Development, Business Models, Business Operations, Operations, Web Development, Research', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'rexlor.png'],
            // Sir Nestor
            ['id' => 9, 'name' => 'Nestor B. Nisperos Jr.', 'email' => 'nestor.nisperos@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Professor in the Arts Management Program of Benilde', 'interests' => 'Education, Business Development, Business Models, Marketing, Product Development, Business Operations, Customer Development', 'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'default.png'],
            // Sir Patrick Frias
            ['id' => 10, 'name' => 'Patrick August Anthony Frias', 'email' => 'patrickaugustanthony.frias@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Professor in the Music Production Program of Benilde', 'interests' => 'Education', 'Education, music technology' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit', 'profilepic' => 'patrickfrias.jpg'],
    	]);
    }
}
