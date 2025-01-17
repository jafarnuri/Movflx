<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    // public function store(CommentRequest $request, $id)
    // {
    //     // Şəkil varsa, yüklə və yolu saxla
    //     $imagePath = null;
    //     if ($request->hasFile('image')) {
    //         $imagePath = $request->file('image')->store('uploads/comment/images', 'public');
    //     }
    
    //     // Blogu tap və şərhi əlavə et
    //     $blog = Blog::findOrFail($id);
    
    //     Comment::create([
    //         'blog_id' => $blog->id,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'content' => $request->content,
    //         'image_path' => $imagePath, // Şəkil yolunu qeyd et
    //     ]);
    
    //     // Şərh sayını artır
    //     $blog->increment('comments_count');
    
    //     return redirect()->route('blog_details', ['id' => $blog->id]);
    // }
    public function store(CommentRequest $request, $id)
    {
        // Validasiya edilmiş məlumatları əldə et
        $validate = $request->validated();
    
        // Şəkil varsa, onu yüklə və yolunu saxla
        if ($request->hasFile('image')) {
            // Şəkil yolunu 'image_path' olaraq qeyd et
            $validate['image'] = $request->file('image')->store('uploads/comments/images', 'public');
        }
    
        // Blogu tap
        $blog = Blog::findOrFail($id);
    
        // `blog_id` dəyərini əlavə et
        $validate['blog_id'] = $blog->id;
    
        // Şərhi əlavə et
        Comment::create($validate);
    
        // Şərh sayını artır
        $blog->increment('comments_count');
    
        // İstifadəçini blog səhifəsinə yönləndir
        return redirect()->route('blog_details', ['id' => $blog->id]);
    }
    
    



}
