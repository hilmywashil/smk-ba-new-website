<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::latest()->first();
        $recentBlog = Post::where('status', 'published')->take(3)->get();

        return view('pages.home', compact('hero', 'recentBlog'));
    }

}
