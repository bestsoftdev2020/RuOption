<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddlewar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        echo 'Role ' . $role;
        return $next($request);
    }
}
