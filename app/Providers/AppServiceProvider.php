<?php

namespace App\Providers;

use App\Models\Product\Category;
use Illuminate\Support\Facades\View;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application solutions.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application solutions.
     */
    public function boot(): void
    {
        // Retrieve the $category object

        $categories = Category::where('status', '=', 'active')->get();

        // Share the $category object with all views
        View::share(compact('categories'));
    }
}
