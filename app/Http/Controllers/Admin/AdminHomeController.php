<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Greeting;
use App\Models\Hero;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $hero = Hero::latest()->first();
        $greetings = Greeting::latest()->take(1)->get();

        return view('dashboard.admin.pages.home', compact('hero', 'greetings'));
    }

}
