<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->check()) {
            // redirect ke halaman login admin
            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}