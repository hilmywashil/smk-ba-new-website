<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $beritaCount = Post::where('category', 'news')->count();
        $activitiesCount = Post::where('category', 'activities')->count();
        $unreadMessagesCount = Message::where('status', 'unread')->count();
        $readMessagesCount = Message::where('status', 'read')->count();

        return view('dashboard.admin.pages.index', compact('beritaCount', 'activitiesCount', 'unreadMessagesCount', 'readMessagesCount'));
    }
}