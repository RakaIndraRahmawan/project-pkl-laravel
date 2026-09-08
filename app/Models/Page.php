<?php

namespace App\Models;

use App\Enums\Tags;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';
    protected $fillable = [
        'slug',
        'title',
        'tag',
        'image',
        'desc',
        'content',
    ];

    protected $casts = [
        'tag' => Tags::class,
    ];
}
