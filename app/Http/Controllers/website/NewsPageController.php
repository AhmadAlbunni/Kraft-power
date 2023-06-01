<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function index()
    {
        return view('website.News.index');
    }
    public function details()
    {
        return view('website.News.show');
    }
}
