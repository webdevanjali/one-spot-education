<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    // public function handle(Request $request, Closure $next): Response    
    public function handle(Request $request, Closure $next, $role): Response  
    {
        if (!auth()->check() || !auth()->user()->hasRole($role)) {
            // Redirect or abort if the user does not have the required role
            return redirect('/home');
        }
        return $next($request);
    }
}

// this middleware is registered app/Http/Kernel.php as role 