<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
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
        $user = User::query()->create($data);
        auth()->login($user);
        return redirect()->route("index.index");
    }

    public function profile()
    {
        $user = Auth::user();
        return view("pages.profile", compact('user'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('index.index');
    }
}
