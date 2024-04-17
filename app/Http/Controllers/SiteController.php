<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('front-page', [
            'categories' => Category::all(),
            'products' => Product::where('isPublished', true)->get(),
        ]);
    }
    
    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('single-product', [
            'product' => $product
        ]);
    }
}
