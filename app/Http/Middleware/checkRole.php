<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {

        // for the visitors
        if(!$request->user()){
            if(in_array('visitor', $roles))
                return $next($request);
            return redirect()->route('login');
        }

        $userRole = $request->user()->role;

        // for the admin and the users
        if(in_array($userRole, $roles))
            return $next($request);

        abort(403, 'Access denied');

    }
}
