<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds. id name email utype password interests company profilepic
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->delete();

        DB::table('users')->insert([
            // Sir Jen
    		['name' => 'Jenesis Adriano', 'email' => 'jenesis.adriano@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Educational Technology Associate for Instructional Technology', 'interests' => 'Education, Community Building, Communications, Networking & Collaboration', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'jenadriano.jpg'],
            // Nica
    		['name' => 'Alyssa Nicole Mombay', 'email' => 'alyssanicole.mombay@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Case Manager at the Center for Inclusive Education', 'interests' => 'Education, Communications, Time & Stress Management, Research', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'default.png'],
            // Sir Mark
    		['name' => 'Edward Mark Meily', 'email' => 'markmeily@me.com', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Director - Experience Strategy', 'interests' => 'Education, Business Development, Marketing, Customer Development, Communications, Content Marketing', 'company' => 'KindMind Experience Design', 'profilepic' => 'sirmark.jpeg'],
            // Sir Jay
    		['name' => 'Jay Jaboneta', 'email' => 'jaymichael.jaboneta@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Co-Founder', 'interests' => 'Education, Business Development, Marketing, Community Building, Communications, Public Relations, Time & Stress Management, Network and Relationship Building, Social Media Management, Networking & Collaboration, Pitching, Storytelling, Fundraising', 'company' => 'Yellow Boat of Hope Foundation', 'profilepic' => 'jayjaboneta.jpg'],
            // Sir Jag
    		['name' => 'Jose Antonio Garcia', 'email' => 'Jaggarcia@benilde.edu.ph ', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Digital Film Program Professor', 'interests' => 'Education, Marketing, Communications', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'default.png'],
            // Sir Jemai
            ['name' => 'Jeremiah So Adriano', 'email' => 'jeremiah.adriano@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Center for Inclusive Education', 'interests' => 'Education, Research, Sociocultural Psychology', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'default.png'],
            // Sir TQ
            ['name' => 'Mark Alvin Antiqueno', 'email' => 'mark.antiqueno@gmail.com', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Founder', 'interests' => 'Education, Marketing, Product Development, Community Building, Communications, Social Media Management, Research', 'company' => 'The Wild Range', 'profilepic' => 'tqantiqueno.jpg'],
            // Sir Rex
            ['name' => 'Rex Lor', 'email' => 'rex.lor@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Innovation Development and Monitoring at Hub of Innovation for Inlcusion', 'interests' => 'Education, Business Development, Business Models, Business Operations, Operations, Web Development, Research', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'rexlor.png'],
            // Sir Nestor
            ['name' => 'Nestor B. Nisperos Jr.', 'email' => 'nestor.nisperos@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Arts Management Program Professor ', 'interests' => 'Education, Business Development, Business Models, Marketing, Product Development, Business Operations, Customer Development', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'default.png'],
            // Sir Patrick Frias
            ['name' => 'Patrick August Anthony Frias', 'email' => 'patrickaugustanthony.frias@benilde.edu.ph', 'uType' => '2',  'password' => bcrypt('benildeHIFI'), 'background' => 'Music Production Professor', 'interests' => 'Education, music technology', 'company' => 'De La Salle - College of Saint Benilde', 'profilepic' => 'patrickfrias.jpg'],
    	]);
    }
}
