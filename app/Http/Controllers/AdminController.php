<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }
    public function login()
    {
        return view("admin.login");
    }
    public function blog_show()
    {
        return view("admin.blogs.blog");
    }
    public function blog_create()
    {
        return view("admin.blogs.blog_create");
    }

    public function user_show()
    {
        return view("admin.blogs.blog");
    }
    public function contact_show()
    {
        return view("admin.settings.contact");
    }
}
