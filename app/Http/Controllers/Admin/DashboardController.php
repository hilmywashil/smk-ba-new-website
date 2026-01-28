<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $beritaCount = Post::where('category', 'news')->count();
        $activitiesCount = Post::where('category', 'activities')->count();

        return view('dashboard.admin.pages.index', compact('beritaCount', 'activitiesCount'));
    }
}