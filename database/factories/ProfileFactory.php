<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'localization' => 'Majan, Dubai, United Arab Emirates',
            'job_position' => 'Full Stack Web Developer',
            'dribbble' => '',
            'github' => 'https://github.com/GHOST117s',
            'linkedin' => 'www.linkedin.com/in/sidharth-kumar-samal-176542325',
            // 'twitter' => 'www.twitter.com/mutamanelhadi',
            // 'facebook' => 'www.facebook.com/mutamanelhadi',
            // 'devto' => 'www.dev.to/mutaman',
            'instagram' => 'www.instagram.com/mutaman',
            // 'youtube' => '',
            // 'medium' => '',
            // 'twitch' => '',
            'skills' => 'PHP, Laravel, Filament, Vue Js, Javascript, Tailwind CSS, Livewire, Node JS',
            'about' => '<p>Experienced backend developer with 3 years of hands-on expertise in Laravel and Filament development.</p><p>Proficient in designing and implementing robust backend systems using the Laravel framework, including database management (PostgreSQL/MySQL), authentication (Sanctum/Passport), and high-performance API development.</p><p>Skilled in utilizing Filament for building elegant, custom, and efficient administrative panels, enabling seamless interactions with complex backend functionalities.</p><br><p>Adept at optimizing application performance through caching strategies (Redis/Memcached), queue management, and thorough code review.</p><p>Committed to adhering to best practices, ensuring code quality, scalability, and maintainability across all projects.</p>',
            'is_open_to_work' => true,
            'document' => 'public/profile/document/Mutaman-Resume.pdf',
            'is_downloadable' => true,
        ];
    }
}
