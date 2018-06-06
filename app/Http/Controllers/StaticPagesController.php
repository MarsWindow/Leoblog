<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return '主页';//view('static_pages/home');
    }

    public function blog()
    {
        return 'bokeye';//view('static_pages/blog');
    }

    public function about()
    {
        return 'guanyuye';//view('static_pages/about');
    }
}
