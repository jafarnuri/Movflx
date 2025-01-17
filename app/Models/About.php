<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts'; // Cədvəlin adı
    protected $fillable = [
        'title',
        'video_link',
        'category_id',
        'release_date',
        'duration'
    ];
    public function category()
    {
        return $this->belongsTo(MovieCategory::class, 'category_id');
    }
}
