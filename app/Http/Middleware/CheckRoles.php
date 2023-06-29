<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRoles
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure|string  $role
     * @return Response
     */
    public function handle(Request $request, Closure $next,...$role)
    {
        if (Auth::check() && in_array(Auth::user()->role, $role)) {
            return $next($request);
        }
        abort(403);
    }
}
