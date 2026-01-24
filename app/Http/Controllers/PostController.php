<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $latestPost = Post::latest()->take(1)->first();
        $lastPost = Post::latest()->skip(1)->take(3)->get();
        $otherPosts = Post::latest()->skip(4)->paginate(10);

        return view('pages.posts', compact('latestPost', 'lastPost', 'otherPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $recentPosts = Post::latest()->take(5)->get();

        return view('pages.details.post', compact('post', 'recentPosts'));
    }
}
