<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $recentBlog = Post::latest()->take(3)->get();

        return view('pages.home', compact('recentBlog'));
    }
}
