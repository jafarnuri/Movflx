<?php
namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Blog_image;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function blog_show()
    {
        $blog_comment = Blog::withCount('comments')->get();
        $blogs = Blog::with('category')->get();
        return view('admin.blogs.blog', compact('blogs', 'blog_comment'));
    }
 
    public function blog_create()
    {
        $categories = BlogCategory::all();
        return view('admin.blogs.blog_create', compact('categories'));  
    }

    public function blog_edit($id)
    {
        $blogs = Blog::findOrFail($id);
        $blogcategories = BlogCategory::all();
        return view('admin.blogs.blog_update', compact('blogs', 'blogcategories'));
    }

    public function blog_store(BlogRequest $request)
    {
        $validate = $request->validated();
    
        // Əsas şəkili yüklə
        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('uploads/blogs/images', 'public');
        }
    
        // Slug əlavə et
        $validate['slug'] = Str::slug($validate['title']);
    
        // Blogu yarad
        $blog = Blog::create($validate);
    
        // Qalereya şəkillərini yüklə
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $galleryImage) {
                $path = $galleryImage->store('uploads/blogs/gallery', 'public');
                Blog_image::create([
                    'blog_id' => $blog->id,
                    'image_path' => $path,
                ]);
            }
        }
    
        return redirect()->route('admin.blog_show')->with('success', 'Blog and gallery images successfully created!');
    }
    
    public function blog_update(BlogRequest $request, $id)
    {
     
        $validate = $request->validated();

        // Mövcud blog məlumatını alırıq
 $blog = Blog::findOrFail($id);
 
 // Əgər yeni şəkil göndərilməyibsə, mövcud şəkili saxlayırıq
 if ($request->hasFile('image')) {
     // Mövcud şəkili silirik (əgər varsa)
     if ($blog->image && Storage::disk('public')->exists($blog->image)) {
         Storage::disk('public')->delete($blog->image);
     }

     // Yeni şəkili saxlayırıq
     $validate['image'] = $request->file('image')->store('uploads/blogs/images', 'public');
 } else {
     // Şəkil dəyişməyibsə, əvvəlki şəkili saxlayırıq
     $validate['image'] = $blog->image;
 }

        $blog->update($validate);

        return redirect()->route('admin.blog_show');
    }       public function delete($id)
       {
           $blog = Blog::findOrFail($id);
   
           // Şəkil varsa, onu da silirik
           if ($blog->image) {
               Storage::disk('public')->delete($blog->image);
           }
   
           // Avtomobili silirik
           $blog->delete();
   
           return redirect()->route('admin.blog_show');
       }

       public function like($id)
       {
           $blog = Blog::findOrFail($id);
       
           // Blog mövcudluğunu yoxlayırıq
           $blog->increment('likes'); // `likes` sahəsini artırırıq
       
           return response()->json([
               'success' => true,
               'likes' => $blog->likes, // Yenilənmiş like sayı
           ]);
       }
       

public function unlike($id)
{
    $blog = Blog::findOrFail($id); // Blogu tap
    $blog->decrementLikes(); // Like azalt
    return response()->json(['likes' => $blog->likes]); // Yeni like sayını qaytar
}
   
}