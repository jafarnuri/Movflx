<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
 

 
    protected $fillable = ['title', 'slug','status','description', 'content', 'author', 'likes', 'comments_count', 'category_id', 'image'];
    
    
    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function images()
{
    return $this->hasMany(Blog_image::class);
}
    // Like artırma funksiyası
    public function incrementLikes()
    {
        $this->increment('likes'); // Like sayını artır
    }

    // Like azaltma funksiyası
    public function decrementLikes()
    {
        $this->decrement('likes');
    }
}
