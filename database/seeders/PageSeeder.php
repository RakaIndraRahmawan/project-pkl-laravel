<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::factory()->create([
            'slug' => 'service-1',
            'title' => 'Service 1',
            'tag' => 'service',
            'image' => 'sample-image.jpg',
            'desc' => 'Discover our first service offering, designed to meet your needs and exceed your expectations.',
            'content' => '<p>Discover our first service offering, designed to meet your needs and exceed your expectations.</p> <p>Our team of experts is committed to delivering top-notch solutions that cater to your specific requirements. We take pride in our ability to provide innovative and effective services that drive results.</p> <p>We look forward to sharing more of our services with you.</p> <p>Explore the details of Service 1 and see how it can benefit you and your business.</p> <p>Thank you for your interest, and we look forward to collaborating with you on future projects!</p>',
        ]);

        Page::factory()->create([
            'slug' => 'portfolio-1',
            'title' => 'Portfolio 1',
            'tag' => 'portfolio',
            'image' => 'sample-image.jpg',
            'desc' => 'Discover our first portfolio item, showcasing our latest work and achievements.',
            'content' => '<p>Discover our first portfolio item, showcasing our latest work and achievements.</p> <p>Our team of experts is committed to delivering top-notch solutions that cater to your specific requirements. We take pride in our ability to provide innovative and effective services that drive results.</p> <p>We look forward to sharing more of our work with you.</p> <p>Explore the details of Portfolio 1 and see how it can benefit you and your business.</p> <p>Thank you for your interest, and we look forward to collaborating with you on future projects!</p>',
        ]);
    }
}
