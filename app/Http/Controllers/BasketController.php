<?php

namespace App\Http\Controllers;

use App\Http\Requests\Basket\BasketRequest;
use App\Models\Basket;
use App\Models\Product;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function create(BasketRequest $request, Product $product)
    {
        $date = $request->validated();
        $date['user_id'] = Auth::id();
        Basket::query()->create($date);
        return redirect()->route('catalog.oneItem', $date['product_id']);
    }

    public function destroy(Basket $basket)
    {
        $basket->delete();
        return redirect()->route('pages.profile');
    }
}
