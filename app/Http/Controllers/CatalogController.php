<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request){
        $category = Category::all();

        $query = Product::query();

        if ($request->has('category')) {
            $category_id = $request->input('category');
            $query->where('category_id', $category_id);
        }

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', '%'.$search.'%');
        }

        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by == 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($sort_by == 'price_desc') {
                $query->orderBy('price', 'desc');
            }
        }

        $product = $query->get();

        return view('pages.catalog', compact('category', 'product'));
    }


    public function oneItem(Product $product){
        return view('pages.itemCatalog', compact('product'));
    }
}
