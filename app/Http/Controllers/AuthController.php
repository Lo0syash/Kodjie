<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\Basket;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("pages.login");
    }

    public function auth(LoginRequest $request)
    {
        $data = $request->validated();
        if (!auth()->attempt($data)) {
            return back()->withInput()->withErrors(["invalid_credentials" => "Неверный логин или пароль"]);
        }
        return redirect()->route('profile.index');
    }

    public function registration()
    {
        return view("pages.registration");
    }

    public function reg(RegistrationRequest $request)
    {
        $data = $request->validated();
        if ($request->has('checkbox')){
            $user = User::query()->create($data);
            auth()->login($user);
            return redirect()->route("index.index");
        }
    }

    public function profile()
    {
        $user = Auth::user();
        $basket = Basket::where('user_id', $user->id)->get();
        $totalPrice = 0;

        foreach ($basket as $item) {
            $product = Product::find($item->product_id);

            if ($product) {
                $totalPrice += $product->price * $item->quantity;
            }
        }

        $products = $basket->map(function ($item) {
            $product = Product::find($item->product_id);
            $product->quantity = $item->quantity;
            return $product;
        });

        return view("pages.profile", compact('user', 'basket', 'products', 'totalPrice'));
    }
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $basket = Basket::where('user_id', $user->id)->get();

        foreach ($basket as $item) {
            Orders::query()->create([
                'user_id' => $user->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'status' => 'Обработка',
            ]);
        }

        $basket->each->delete();
        return redirect()->route("profile.index");
    }


    public function logout()
    {
        auth()->logout();
        return redirect()->route('index.index');
    }
}
