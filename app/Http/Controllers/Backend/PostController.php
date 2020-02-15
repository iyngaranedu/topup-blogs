<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('back-end.views.posts.index');
    }

    public function create()
    {
        return view('back-end.views.posts.create');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('back-end.views.posts.show');
    }

    public function edit()
    {
        return view('back-end.views.posts.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
