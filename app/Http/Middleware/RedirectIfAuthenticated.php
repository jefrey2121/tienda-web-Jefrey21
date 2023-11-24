<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
{
    if (Auth::guard($guard)->check()) {
        // Verifica si el usuario es el usuario especial
        if (Auth::user()->email === 'admin@2121') {
            return redirect()->route('administrador');
        }

        return redirect(RouteServiceProvider::HOME);
    }

    return $next($request);
}
    
}
