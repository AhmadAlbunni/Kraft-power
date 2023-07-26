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
        if ($category === 'all') {
            $products = Product::where('status', 'active')->get();
        } else {
            $categoryId = Category::where('name', $category)->value('id');

            if ($categoryId) {
                $products = Product::where('status', 'active')
                    ->where('category_id', $categoryId)
                    ->get();
            } else {
                return redirect()->route('website.home');
            }
        }

        $categories = Category::where('status', 'active')->get();
        return view('website.products.index', compact('categories', 'products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function details($id)
    {
        // Find the product by ID, ensuring it exists and is active
        $product = Product::where('status', 'active')->findOrFail($id);

// Find the category associated with the product, ensuring it exists and is active
        $category = Category::where('status', 'active')->findOrFail($product->category_id);

// Get all active categories
        $categories = Category::where('status', 'active')->get();

        $products = Product::where('status', 'active')
            ->where('id', "!=", $id)
            ->get();

// Return the view with the data
        return view('website.products.show', compact('categories', 'product', 'category','products'));

    }


}
