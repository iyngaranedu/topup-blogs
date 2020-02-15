<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('back-end.views.category.index');
    }

    public function create()
    {
        return view('back-end.views.category.create');
    }

    public function store()
    {

    }

    public function show()
    {
        return view('back-end.views.category.show');
    }

    public function edit()
    {
        return view('back-end.views.category.edit');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }


}
