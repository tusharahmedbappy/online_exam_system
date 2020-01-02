<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
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
        $verify = session()->get('adminUser');
        if($verify){
            return $next($request);
        }else{
            return redirect('/login-ui');
        }
    }
}
