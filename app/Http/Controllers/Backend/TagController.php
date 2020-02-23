<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view('back-end.views.tags.create');
    }

    public function store()
    {
        return 'Tags - store';
    }
}
