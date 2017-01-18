<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

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
        if ( $request->user() != null && $request->user()->permission > 0 ) {
            return $next($request);
        }

        Session::flash('danger', 'Miért baszakszol?');
        return redirect()->route('user.mypage');
    }
}
