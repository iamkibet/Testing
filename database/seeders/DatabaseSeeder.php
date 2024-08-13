<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'Dennis Doe',
            'email' => "example@gmail.com"
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        //     Listing::create([

        // 'title' => 'Backend Developer',
        // 'tags' => 'PHP, Laravel, MySQL, REST API',
        // 'company' => 'Tech Ventures LLC',
        // 'locaation' => 'San Francisco, CA',
        // 'email' => 'hr@techventures.com',
        // 'description' => 'We are looking for a skilled Backend Developer with experience in Laravel and MySQL. The ideal candidate will be responsible for developing and maintaining server-side logic, ensuring high performance and responsiveness to requests from the front end. Responsibilities include database management, integrating user-facing elements, and optimizing the application for maximum speed and scalability.',


        //     ]);

        //     Listing::create([

        // 'title' => 'Frontend Developer',
        // 'tags' => 'React, JavaScript, HTML, CSS',
        // 'company' => 'Creative Coders Inc.',
        // 'locaation' => 'Austin, TX',
        // 'email' => 'careers@creativecoders.com',
        // 'description' => 'Join our dynamic team as a Frontend Developer. You will be responsible for implementing visual elements that users see and interact with in a web application. Your role will involve translating UI/UX design wireframes into actual code, ensuring the technical feasibility of designs, and optimizing applications for maximum speed and scalability. Experience with React and modern JavaScript frameworks is essential.',


        //     ]);
    }
}
