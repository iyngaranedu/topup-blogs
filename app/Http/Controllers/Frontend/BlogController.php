<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('front-end.views.blog.index');
    }

    public function view($id)
    {
        return view('front-end.views.blog.view');
    }
}
