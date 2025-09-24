<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next)
    {
        // Kalau belum login, jangan cek role → biar bisa buka /admin/login
        if (! auth()->check()) {
            return $next($request);
        }

        // Kalau sudah login tapi tidak punya role → 404
        if (auth()->user()->roles()->count() === 0) {
            abort(404);
        }

        return $next($request);
    }
}
