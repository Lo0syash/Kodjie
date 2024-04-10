<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        $category = Category::all();
        $product = Product::all();
        return view('pages.catalog', compact('category', 'product'));
    }
    public function oneitem(){
        return view('pages.itemCatalog');
    }
}
