<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('pages.index', compact('product'));
    }
    public function about()
    {
        $product = Product::all();
        return view('pages.about',  compact('product'));
    }
    public function how()
    {
        return view('pages.how');
    }
    public function admin()
    {
        $category = Category::all();
        $product = Product::all();
        return view('pages.admin', compact('category', 'product'));
    }
}
