<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('pages.product.create', compact('category'));
    }

    public function edit(Product $product)
    {
        $category = Category::all();
        return view('pages.product.edit', compact('product', 'category'));
    }

    public function store(StoreRequest $request) {
        $date = $request->validated();
        if ($request->hasFile('path')) {
            $date['path'] = $request->file('path')->store('public/products');
            Product::query()->create($date);
        }
        return redirect()->route('index.admin');
    }
}
