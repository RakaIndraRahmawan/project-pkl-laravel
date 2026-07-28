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
            'hero_image' => 'https://www.google.com/imgres?q=irasutoya&imgurl=https%3A%2F%2Fi.redd.it%2Fan-irasutoya-i-did-of-me-on-stream-v0-rl92y9alyr9f1.png%3Fwidth%3D300%26format%3Dpng%26auto%3Dwebp%26s%3D2885482721978de997398b54cae6f64967c1c0e3&imgrefurl=https%3A%2F%2Fwww.reddit.com%2Fr%2FVirtualYoutubers%2Fcomments%2F1ln3kz5%2Fan_irasutoya_i_did_of_me_on_stream%2F&docid=ButULKpmVACtoM&tbnid=FQcy5HOGjeLYhM&vet=12ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA..i&w=300&h=300&hcb=2&ved=2ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA',
            
            'about_title' => 'About Us',
            'about_desc' => 'We are a team of passionate individuals dedicated to delivering high-quality services to our clients. Our mission is to exceed expectations and create lasting relationships.',
            'about_image' => 'https://www.google.com/imgres?q=irasutoya&imgurl=https%3A%2F%2Fi.redd.it%2Fan-irasutoya-i-did-of-me-on-stream-v0-rl92y9alyr9f1.png%3Fwidth%3D300%26format%3Dpng%26auto%3Dwebp%26s%3D2885482721978de997398b54cae6f64967c1c0e3&imgrefurl=https%3A%2F%2Fwww.reddit.com%2Fr%2FVirtualYoutubers%2Fcomments%2F1ln3kz5%2Fan_irasutoya_i_did_of_me_on_stream%2F&docid=ButULKpmVACtoM&tbnid=FQcy5HOGjeLYhM&vet=12ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA..i&w=300&h=300&hcb=2&ved=2ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA',
        
            'contact_email' => 'contact@ourwebsite.com',
            'contact_phone' => '+1 (123) 456-7890',
            'address' => '123 Main Street, City, State 12345',
            'facebook_url' => 'https://www.facebook.com/ourwebsite',
            'instagram_url' => 'https://www.instagram.com/ourwebsite',
            'twitter_url' => 'https://www.twitter.com/ourwebsite',
        ]);
    }
}
