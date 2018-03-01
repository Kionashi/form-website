<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class excludeInspector
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
        if ($user->role->name == 'INSPECTOR') {
            return redirect()->route('/');
        }else{
            return $next($request);
        }
    }
}
