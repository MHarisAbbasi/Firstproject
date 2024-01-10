<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $path = $request->path();

        if(($path == "login" || $path == "register") && Session::get('user')) {
            return redirect('/');
        }elseif(($path != "login" && !Session::get('user')) && ($path != "register" && !Session::get('user'))) {
            return redirect('/login');
        }

        return $next($request);
    }
}