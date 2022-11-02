<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CatalogAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if (empty($request->user()) || !$request->user()->hasRole($role)) {
            return redirect('login')->with('errmessage', "You do not have access to this page");
        }
        return $next($request);
    }
}
