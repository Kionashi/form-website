<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class excludeExternal
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
        if($user){
            
            if ($user->role->name == 'EXTERNAL') {
                return redirect()->route('/');
            }else{
                return $next($request);
            }
        }else{
            return redirect()->route('/');
        }
    }
}
