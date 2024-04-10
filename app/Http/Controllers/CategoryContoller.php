<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
    public function create()
    {
        return view('pages.category.create');
    }

    public function edit(Category $category)
    {
        return view('pages.category.edit', compact('category'));
    }

    public function store(StoreRequest $request) {
        $date = $request->validated();
        Category::query()->create($date);
        return redirect()->route('index.admin');
    }

    public function update(Category $category, UpdateRequest $request)
    {
        $date = $request->validated();
        $category->update($date);
        return redirect()->route('index.admin');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('index.admin');
    }
}
