<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondController extends Controller
{
    public function home()
    {
        return view("frond.home");
    }
    public function contact()
    {
        return view("frond.contact");
    }
    public function blog()
    {
        return view("frond.blog");
    }

    public function movie()
    {
        return view("frond.movie");
    }

    public function pricing()
    {
        return view("frond.pricing");
    }

    public function tv_show()
    {
        return view("frond.tv-show");
    }
}