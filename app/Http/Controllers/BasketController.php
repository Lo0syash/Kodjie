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

    public function destroy(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->input('product_id');

        $cartItem = Basket::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cartItem) {
            $cartItem->delete();
        }
        return redirect()->route('profile.index');

    }

    public function increaseQuantity(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->input('product_id');

        $cartItem = Basket::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cartItem) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity += 1;
                $cartItem->save();
            }
        }
        return redirect()->route('profile.index');
    }

    public function decreaseQuantity(Request $request)
    {
        $user_id = Auth::id();
        $product_id = $request->input('product_id');

        $cartItem = Basket::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cartItem) {
            if ($cartItem->quantity > 1) {
                $cartItem->quantity -= 1;
                $cartItem->save();
            }
        }
        return redirect()->route('profile.index');
    }

}
