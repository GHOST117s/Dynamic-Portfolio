<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the courses
        $experiences = [
            [
                'name' => 'Full Stack Web Developer',
                'description' => 'I specialized in building end-to-end web solutions tailored to client needs. I utilized a diverse tech stack, including HTML, CSS, JavaScript, Vue.js, Nuxt and backend technologies like Php, Laravel, ASP.Net ',
                'institution' => 'Aldana Computers Tech',
                'start_date' => '2023-12-15',
                'end_date' => '2023-7-15',
                'status' => 'Completed',
            ],
            [
                'name' => 'Senior PHP Developer',
                'description' => 'I am a specialized Backend Developer focused on building scalable web applications using Laravel. I design and implement robust RESTful APIs for seamless data exchange and leverage cloud platforms like AWS and Azure to deploy secure, high-performance architecture.',
                'start_date' => '2024-8-1',
                'end_date' => '2024-8-1',
                'status' => 'Ongoing',
            ]
        ];

        // Insert the courses into the database
        DB::table('experiences')->insert($experiences);
    }
}
