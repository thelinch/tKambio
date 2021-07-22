<?php

namespace App\Http\Middleware;

use Closure;
use Error;
use Illuminate\Http\Request;

class apiKey
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
        if (!$request->apiKey) {
            throw new Error("No tiene autorizacion");
        }
        if ($request->apiKey !== "AbCd123") {
            throw new Error("No tiene autorizacion");
        }
        return $next($request);
    }
}
