<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ProductContoller extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('pages.product.create', compact('category'));
    }

    public function edit()
    {
        return view('pages.product.edit');
    }
}
