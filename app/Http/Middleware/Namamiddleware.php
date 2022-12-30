<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Namamiddleware
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
        if  ($request->input('token') !== 'rahasia') {
            return redirect('home');
        }
        return $next($request);
    }
}
