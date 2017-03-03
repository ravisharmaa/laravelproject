<?php

namespace App\Http\Controllers;

use App\Model\Gallery;

class FrontendController extends Controller
{

    public function index()
    {
        $gallery = Gallery::orderBy('id', 'asc')->get();
        return view('frontend.index', compact('gallery'));
    }

    public function details($slug)
    {
        $gallery = Gallery::where('slug', $slug)->get();
        dd($gallery);

    }

}
