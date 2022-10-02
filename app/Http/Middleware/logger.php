<?php

namespace App\Http\Middleware;

use Closure;
use Log;
class logger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   Log::info("djdj");
        return $next($request);
    }
}
