<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class Contador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
            if (!Auth::check()) {
                return redirect()->route('login');
            }
            if (Auth::user()->role == 2) {
                return redirect()->route('cliente');
            }
            if (Auth::user()->role == 3) {
                return $next($request);
            }
            if (Auth::user()->role == 1) {
                return redirect()->route('encargado');
            }
            if (Auth::user()->role == 4) {
                return redirect()->route('supervisor');
            }
    }
}
