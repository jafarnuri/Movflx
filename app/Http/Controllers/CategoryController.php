<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoryRequest;
use App\Models\BlogCategory;
use App\Models\MovieCategory;
class CategoryController extends Controller
{
    public function movcategory()
    {
$category = MovieCategory::all();
        return view('admin.moviecategory.category',compact('category'));
    }
    public function movcategory_create()
    {

        return view('admin.moviecategory.category_create');
    }

    public function movcategory_store(CategoryRequest $request)
    {

        $validate = $request->validated();

        MovieCategory::create($validate);

        return redirect()->route('admin.movcategory_create');
    }

    public function mov_category_delete($id)
    {
        $blog = MovieCategory::findOrFail($id);

        // Avtomobili silirik
        $blog->delete();

        return redirect()->route('admin.movcategory');
    }
    public function blogcategory()
    {
$category = BlogCategory::all();
        return view('admin.blogcategory.category',compact('category'));
    }

    public function blogcategory_create()
    {

        return view('admin.blogcategory.category_create');
    }

    public function blogcategory_store(CategoryRequest $request)
    {

        $validate = $request->validated();

        BlogCategory::create($validate);

        return redirect()->route('admin.blogcategory_create');
    }

    public function blog_category_delete($id)
    {
        $blog = BlogCategory::findOrFail($id);

        // Avtomobili silirik
        $blog->delete();

        return redirect()->route('admin.blogcategory');
    }
}
