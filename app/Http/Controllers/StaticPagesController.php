<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class StaticPagesController extends Controller
{
    public function home(User $user)
    {
        return view('static_pages/home',compact('user'));
    }

    public function blog()
    {
        return view('static_pages/blog');
    }

    public function about()
    {
        return view('static_pages/about');
    }
}
