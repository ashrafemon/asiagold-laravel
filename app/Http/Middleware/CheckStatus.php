<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckStatus
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
        if(Auth::user()->status == 'suspand'){
            Auth::logout();

            return redirect()->route('login')->with('You are suspanded plz contact with us');
        }

        return $next($request);
    }
}
