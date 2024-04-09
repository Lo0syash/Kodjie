<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
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
