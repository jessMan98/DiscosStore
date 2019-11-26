<?php

namespace App\Http\Middleware;

use Closure;
use\App\Role;
use\App\User;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        $users = $request->user(); 

        foreach ($users->roles as $rol) {

            if(Auth::check() && $rol->name == 'Administrador'){
                  
                return $next($request);
            }

            return redirect()->route('login'); 
        }

    }
}
