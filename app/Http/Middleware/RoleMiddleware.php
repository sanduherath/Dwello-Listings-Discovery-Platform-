<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next, $role)
{
  if (! $request->user()) {
    return redirect('/login');
  }
  if ($request->user()->role === $role) {
    return $next($request);
  }
  // redirect to their correct dashboard
  return redirect($request->user()->role === 'Admin' ? '/admin/dashboard' : '/user/dashboard');
}
}
