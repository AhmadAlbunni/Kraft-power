<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }



}
