<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsEventController extends Controller
{
    public function index(Request $request)
    {
        return view('news');
    }
}
