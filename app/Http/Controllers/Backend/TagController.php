<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('back-end.views.tags.index');
    }

    public function create()
    {
        return view('back-end.views.tags.create');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('back-end.views.tags.show');
    }

    public function edit()
    {
        return view('back-end.views.tags.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
