<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home');
    }

    public function login()
    {
        return view('admin.login');
    }


    public function user_show()
    {
        $users = User::all();

        return view('admin.users.users', compact('users'));
    }


    public function register()
    {
        return view('admin.users.register');
    }

    public function testiq_kod()
    {
        return view('emails.delete_user_confirmation');
    }
}
