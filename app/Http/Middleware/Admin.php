<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->admin != 1){
            return new Response(view('index'));
        }
        if ($request->user() === null){
            return new Response(view('errors.404'));
        }
        return $next($request);
    }
}
