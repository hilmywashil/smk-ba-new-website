<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $latestPost = Post::where('status', 'published')->latest()->take(1)->first();
        $lastPost = Post::where('status', 'published')->latest()->skip(1)->take(4)->get();

        $posts = Post::where('status', 'published')->latest()->get();

        $otherPosts = $posts->slice(5)->take(9);
        $otherPosts = new \Illuminate\Pagination\LengthAwarePaginator(
            $otherPosts,
            $posts->count() - 5,
            9,
            request()->get('page', 1),
            ['path' => request()->url()]
        );

        return view('pages.posts', compact('latestPost', 'lastPost', 'otherPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $recentPosts = Post::where('status', 'published')->latest()->take(5)->get();

        return view('pages.details.post', compact('post', 'recentPosts'));
    }
}
