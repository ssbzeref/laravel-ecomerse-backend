<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        // if (auth()->user()->email = 'fuck@example.com') {
        //     return $next($request);
        // }

        return redirect('landing')->with('error', 'You have not admin access');
    }
}
