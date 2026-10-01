<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Показать форму входа.
     */
    public function showLoginForm()
    {
        return view('login');
    }

    /**
     * Обработать попытку входа.
     */
    public function login(Request $request)
    {
        // 1. Валидация данных
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Запомнить меня (галочка)
        $remember = $request->boolean('remember');

        // 3. Попытка авторизации
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect()->intended('/'); // куда перенаправить после входа
        }

        // 4. Если не получилось — вернуть с ошибкой
        return back()->withErrors([
            'email' => 'Неверный email или пароль.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
}