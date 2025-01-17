<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];

    protected $table = 'movie_categories';
    public function blogs()
    {
        return $this->hasMany(Movie::class, 'category_id');
    }

    public function abouts()
    {
        return $this->hasMany(About::class, 'category_id');
    }
}
