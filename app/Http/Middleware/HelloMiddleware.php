<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
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
        $hello = 'Yewa! This is Middleware!!';
        $bye = 'Good-bye, Middleware...';
        $data = [
            'hello'=>$hello,
            'bye'=>$bye
        ];
        $request->merge($data);
        return $next($request);
    }
}
