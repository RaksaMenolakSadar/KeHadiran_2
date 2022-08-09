<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    static $blog_post = [
        "title" => "Judul Post 1",
        "slug" => "judul-post-1",
        "author" => "Rakhsha",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nisi velit inventore laborum adipisci dolore voluptates vitae itaque corporis et! Dicta officiis aperiam eum porro architecto quibusdam quod debitis voluptates."
    ];
}
