<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
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
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('page-view', [
            'page' => $page
        ]);
    }
    public function thanksPage($tracking_number)
    {
        return view('thanks-page', compact('tracking_number'));
    }
}
