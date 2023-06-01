<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('website.home');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }
}
