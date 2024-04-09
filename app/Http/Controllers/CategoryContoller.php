<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryContoller extends Controller
{
    public function create()
    {
        return view('pages.category.create');
    }

    public function edit()
    {
        return view('pages.category.edit');
    }
}
