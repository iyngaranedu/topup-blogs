<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function aboutUs()
    {
        return view('front-end.views.cms.about-us');
    }

    public function contactUs()
    {
        return view('front-end.views.cms.contact-us');
    }
}
