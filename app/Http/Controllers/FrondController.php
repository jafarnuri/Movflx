<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;
use App\Models\Communication;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Social;

class FrondController extends Controller
{
    public function home()
    {
        $movie = Movie::all();
        $movcategories = MovieCategory::all();
        return view('frond.home', compact('movie','movcategories'));
    }

    public function contact()
    {
        $communication = Communication::first();
        return view('frond.contact', compact('communication'));
    }

    public function blog()
    {
        $blogs=Blog::all();
        $blogcategories = BlogCategory::withCount('blogs')->get();
        return view('frond.blog', compact('blogcategories','blogs'));
    }

    public function movie()
    {
        $movie = Movie::all();
        $movcategories = MovieCategory::all();
        return view('frond.movie', compact('movie','movcategories'));
    }

    public function movie_details($id)
    {
        $movies = Movie::findOrFail($id);
        $movie = Movie::all();
        return view('frond.movie-details',compact('movies','movie'));
    }

    public function tv_show()
    {
        $movie = Movie::all();
        $movcategories = MovieCategory::all();
        return view('frond.tv-show',compact('movie','movcategories'));
    }


    public function blog_details($id)
    {
       
        $blog = Blog::with('comments')->findOrFail($id);
     //   $blog = Blog::findOrFail($id);
        $comments = Comment::where('blog_id', $id)->get();
        $blogcategories = BlogCategory::withCount('blogs')->get();
        return view('frond.blog-details', compact('blogcategories','blog','comments'));
    }

    public function login()
    {
        return view('admin.login');
    }
    public function show()
    {
        $socialLinks = Social::first(); // İlk sosial media məlumatını alırıq
        return view('frond_layout.footer', compact('socialLinks')); // View'ə göndəririk
    }
}
