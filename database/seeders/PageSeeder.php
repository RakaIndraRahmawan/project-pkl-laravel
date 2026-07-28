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
            'slug' => 'home',
            'title' => 'Home',
            'tag' => 'service',
            'image' => 'https://www.google.com/imgres?q=irasutoya&imgurl=https%3A%2F%2Fi.redd.it%2Fan-irasutoya-i-did-of-me-on-stream-v0-rl92y9alyr9f1.png%3Fwidth%3D300%26format%3Dpng%26auto%3Dwebp%26s%3D2885482721978de997398b54cae6f64967c1c0e3&imgrefurl=https%3A%2F%2Fwww.reddit.com%2Fr%2FVirtualYoutubers%2Fcomments%2F1ln3kz5%2Fan_irasutoya_i_did_of_me_on_stream%2F&docid=ButULKpmVACtoM&tbnid=FQcy5HOGjeLYhM&vet=12ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA..i&w=300&h=300&hcb=2&ved=2ahUKEwij4aTqp_SVAxWN3zgGHXOuHlAQnPAOegUIhwEQAA',
            'desc' => 'Welcome to our website! We are delighted to have you here. Explore our content and discover what we have to offer.',
            'content' => '<p>Welcome to our website! We are delighted to have you here. Explore our content and discover what we have to offer.</p>',
        ]);
    }
}
