<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
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
}
