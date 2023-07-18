<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filter = request()->has('filter') ? request()->filter : 'all';
        if ($filter == "all") {
            $products = $this->model_instance::all()->sortBy('id');
        } else
            $products = $this->model_instance::all()->sortBy('id');

        $categories = Category::where('status', '=', 'active')->get();

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
