<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        return view('pages.catalog');
    }
    public function oneitem(){
        return view('pages.itemCatalog');
    }
}
