<?php

namespace Database\Seeders;

use App\Models\Homepage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Homepage::create([
            'hero_title' => 'Welcome to Our Website',
            'hero_subtitle' => 'We provide the best services for you.',
            'hero_image' => 'sample-image.jpg',
            
            'about_title' => 'Mengenal lebih dekat tentang kami',
            'about_desc' => 'We are a passionate team committed to delivering innovative solutions and outstanding service. With years of industry experience, we help businesses grow through integrity, quality, and a strong customer-focused approach. Our goal is to build lasting partnerships and create meaningful impact. We believe in continuous improvement, collaboration, and turning challenges into opportunities. Your success is at the heart of everything we do, and we strive to exceed expectations every step of the way.',
            'about_image' => 'sample-image.jpg',
            'about_date_founded' => '2020-01-01',
            'about_projects_finished' => 150,
        
            'contact_email' => 'contact@ourwebsite.com',
            'contact_phone' => '+1 (123) 456-7890',
            'address' => '123 Main Street, City, State 12345',
            'facebook_url' => 'https://www.facebook.com/ourwebsite',
            'instagram_url' => 'https://www.instagram.com/ourwebsite',
            'twitter_url' => 'https://www.twitter.com/ourwebsite',
        ]);
    }
}
