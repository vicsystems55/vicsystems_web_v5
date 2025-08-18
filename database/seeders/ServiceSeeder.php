<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                $services = [
            [
                'title' => 'Web Development',
                'icon' => 'fa-solid fa-code',
                'image' => 'services/web-development.jpg',
                'short_description' => 'We build responsive and scalable websites.',
            ],
            [
                'title' => 'Mobile Apps',
                'icon' => 'fa-solid fa-mobile-screen-button',
                'image' => 'services/mobile-apps.jpg',
                'short_description' => 'Custom mobile apps that engage and convert.',
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'fa-solid fa-bullhorn',
                'image' => 'services/digital-marketing.jpg',
                'short_description' => 'Boost your brand with data-driven marketing.',
            ],
            [
                'title' => 'Email Marketing',
                'icon' => 'fa-solid fa-envelope-open-text',
                'image' => 'services/email-marketing.jpg',
                'short_description' => 'Reach customers directly with effective campaigns.',
            ],
            [
                'title' => 'Social Media Marketing',
                'icon' => 'fa-brands fa-facebook-f',
                'image' => 'services/social-media.jpg',
                'short_description' => 'Grow your presence across social media platforms.',
            ],
            [
                'title' => 'Tech Consultation',
                'icon' => 'fa-solid fa-lightbulb',
                'image' => 'services/tech-consultation.jpg',
                'short_description' => 'Expert advice to scale your business with tech.',
            ],
            [
                'title' => 'Brand Development',
                'icon' => 'fa-solid fa-pen-nib',
                'image' => 'services/brand-development.jpg',
                'short_description' => 'We craft strong brands that stand out.',
            ],
            [
                'title' => 'Trainings',
                'icon' => 'fa-solid fa-chalkboard-teacher',
                'image' => 'services/trainings.jpg',
                'short_description' => 'Professional training to build digital skills.',
            ],
            [
                'title' => 'SEO',
                'icon' => 'fa-solid fa-magnifying-glass-chart',
                'image' => 'services/seo.jpg',
                'short_description' => 'Optimize your site for better search rankings.',
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                ...$service,
                'slug' => Str::slug($service['title']),
            ]);
        }
    }
}
