<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'category_id',
        'release_year',
        'quality',
        'duration',
        'description',
        'poster_image',
        'trailer_url',
        'movie_url',
        'status',
    ];
}
