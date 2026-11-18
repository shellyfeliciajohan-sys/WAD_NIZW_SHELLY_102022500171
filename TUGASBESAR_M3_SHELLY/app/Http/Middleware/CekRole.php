<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    public function handle(Request $request, Closure $next, ...$role)
    {
        if (!in_array(session('role'), $role)) {
            return redirect('/buku');
        }

        return $next($request);
    }
}
