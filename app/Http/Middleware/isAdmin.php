<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
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
        $user = Auth::user();
        // dump($user);die;
        
        if($user->role->name == 'ADMIN'){
            return $next($request);
        }else{
            return redirect()->route('/');
        }
    }
}
