<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm() {
        return view ('register');
    }

    public function register(RegisterRequest $request) {
        User::create($request->validated());
        return redirect()->route('loginForm');
    }
}
