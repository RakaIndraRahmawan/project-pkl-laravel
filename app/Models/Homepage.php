<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $table = 'homepages';

    protected $fillable = [
        'hero_title',
        'hero_subtitle',
        'hero_image',
        'about_title',
        'about_desc',
        'about_image',
        'contact_email',
        'contact_phone',
        'address',
        'facebook_url',
        'instagram_url',
        'twitter_url',
    ];
}