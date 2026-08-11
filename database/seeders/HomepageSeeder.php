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
            
            'about_title' => 'About Us',
            'about_desc' => 'We are a team of passionate individuals dedicated to delivering high-quality services to our clients. Our mission is to exceed expectations and create lasting relationships.',
            'about_image' => 'sample-about-image.jpg',
        
            'contact_email' => 'contact@ourwebsite.com',
            'contact_phone' => '+1 (123) 456-7890',
            'address' => '123 Main Street, City, State 12345',
            'facebook_url' => 'https://www.facebook.com/ourwebsite',
            'instagram_url' => 'https://www.instagram.com/ourwebsite',
            'twitter_url' => 'https://www.twitter.com/ourwebsite',
        ]);
    }
}
