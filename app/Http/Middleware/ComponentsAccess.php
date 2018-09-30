<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class ComponentsAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->user())
          return redirect('/');
        if($request->user()->isUser()||$request->user()->isSuperAdmin()||$request->user()->isAdmin())
          return $next($request);
        return redirect('/');
    }
}
