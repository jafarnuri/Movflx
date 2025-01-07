<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
 
    protected $fillable = ['title', 'slug', 'content', 'author', 'likes', 'comments_count', 'category_id', 'image'];


    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }


}
