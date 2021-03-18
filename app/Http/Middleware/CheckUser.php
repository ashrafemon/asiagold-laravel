<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckUser
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
        if(Auth::user()->role->name == 'user'){
            return $next($request);
        }
        
        return redirect()->route('admin.dashboard')->with('message','Sorry, You have not any accesible permission to access...');
    }
}
