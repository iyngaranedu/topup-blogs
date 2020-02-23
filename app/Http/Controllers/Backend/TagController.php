<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index()
    {
        $tags = DB::table('tbl_tags')->get();
        return view('back-end.views.tags.index', ['tags' => $tags]);
    }

    public function create()
    {
        return view('back-end.views.tags.create');
    }

    public function store(Request $request)
    {
        $tag = $request->input('tag');
        if ($tag) {
            $res = DB::table('tbl_tags')->insert([
                'tag' => $tag,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
            dd($res);
        }
    }
}
