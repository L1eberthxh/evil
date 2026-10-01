<?php
//  "/admin?login=Admin26&password=Demo20"  - путь для админки
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $login    = $request->input('login');
        $password = $request->input('password');

        if ($login !== 'Admin26' || $password !== 'Demo20') {
            abort(403, 'Доступ только для администратора.');
        }
        return $next($request);
    }
}