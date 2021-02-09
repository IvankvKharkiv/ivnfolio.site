<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TestMid
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
        echo '<h1>Test mid</h1> <br>';
        return $next($request);
    }
}
