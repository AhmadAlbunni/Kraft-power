<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Product\Category;
use App\Models\Product\Product;

class ProductPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($category)
    {
        if ($categoryId = Category::where('name', $category)->value('id'))
            $products = Product::where('status', '=', 'active')
                ->where('category_id', $categoryId)
                ->get();
        else
            $products = Product::where('status', '=', 'active')->get();

        $categories = Category::where('status', '=', 'active')->get();

        return view('website.products.index', compact(['categories', 'products']));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details()
    {
        return view('website.products.show');
    }


}
