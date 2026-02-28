<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckBanned
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->is_banned) {
            Auth::logout();
            return redirect('/login')->with('error', 'You are banned');
        }

        return $next($request);
    }
}
