<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('homepage', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->string('hero_subtitle');
            $table->string('hero_image');

            $table->string('about_title');
            $table->text('about_desc');
            $table->string('about_image');

            $table->string('contact_email');
            $table->string('contact_phone');
            $table->string('address');
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('twitter_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage');
    }
};
