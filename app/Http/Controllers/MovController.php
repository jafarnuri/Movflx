<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovRequest;
use App\Models\Movie;
use App\Models\MovieCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class MovController extends Controller
{
    public function mov_show()
    {
        $movies = Movie::with('category')->get();
        return view('admin.movies.movie',compact('movies'));
    }


    public function mov_create()
    {
        $categories = MovieCategory::all();
        return view('admin.movies.mov_create', compact('categories'));  
    }
    public function mov_update($id)
    {
        $movie = Movie::findOrFail($id);
        $category = MovieCategory::all();
        return view('admin.movies.movie_update', compact('movie', 'category'));
    }

    public function mov_store(MovRequest $request)
    {

        $validate = $request->validated();

        if ($request->hasFile('poster_image')) {
            $validate['poster_image'] = $request->file('poster_image')->store('uploads/movies/images', 'public');
        }

        Movie::create($validate);

        return redirect()->route('admin.mov_show');
    }

    public function mov_edit(MovRequest $request, $id)
    {
        // Validasiya olunmuş məlumatları alırıq
        $validate = $request->validated();
    
        // Mövcud filmi tapırıq
        $movie = Movie::findOrFail($id);
    
        // Əgər yeni şəkil göndərilibsə
        if ($request->hasFile('poster_image')) {
            // Əvvəlki şəkili silirik (əgər varsa)
            if ($movie->poster_image && Storage::disk('public')->exists($movie->poster_image)) {
                Storage::disk('public')->delete($movie->poster_image);
            }
    
            // Yeni şəkili saxlayırıq
            $validate['poster_image'] = $request->file('poster_image')->store('uploads/movies/images', 'public');
        } else {
            // Əvvəlki şəkili saxlayırıq
            $validate['poster_image'] = $movie->poster_image;
        }
    
        // Məlumatları yeniləyirik
        $movie->update($validate);
    
        // İstifadəçini yönləndiririk
        return redirect()->route('admin.mov_show')->with('success', 'Movie successfully updated!');
    }
    
    public function mov_delete($id)
    {
        $movie = Movie::findOrFail($id);

        // Şəkil varsa, onu da silirik
        if ($movie->poster_image) {
            Storage::disk('public')->delete($movie->poster_image);
        }

        // Avtomobili silirik
        $movie->delete();

        return redirect()->route('admin.mov_show');
    }

}
