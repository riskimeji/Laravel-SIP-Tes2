<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle(Request $request, Closure $next){
        if (auth()->check() && auth()->user()->role === 'staff') {
            return $next($request);
        }
        return redirect()->route('login')->withErrors([
            'error' => 'Anda tidak memiliki izin untuk mengakses halaman ini.'
        ]);
    }

}
