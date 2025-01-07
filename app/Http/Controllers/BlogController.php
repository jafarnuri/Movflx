<?php
namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class BlogController extends Controller
{
    public function blog_show()
    {
        $blogs = Blog::with('category')->get();
        return view('admin.blogs.blog', compact('blogs'));
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
   
           if ($request->hasFile('image')) {
               $validate['image'] = $request->file('image')->store('uploads/blogs/images', 'public');
           }
           $validate['slug'] = Str::slug($validate['title']);
   
           Blog::create($validate);
   
           return redirect()->route('admin.blog_show');
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
       }
       
       public function delete($id)
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
   
}