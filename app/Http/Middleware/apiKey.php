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
            abort(403, 'Unauthorized action.');
        }
        if ($request->apiKey !== "AbCd123") {
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
