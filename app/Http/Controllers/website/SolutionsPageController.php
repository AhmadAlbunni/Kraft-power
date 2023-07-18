<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SolutionsPageController extends Controller
{
    public function index()
    {
        return view('website.solutions.index');
    }
    public function details()
    {
        return view('website.solutions.show');
    }
}
