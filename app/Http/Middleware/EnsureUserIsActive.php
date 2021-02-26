<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EnsureUserIsActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        $user = User::find(Auth::user()->id);

        if( $user->status != 1)
        {
            Auth::guard('web')->logout();
            
            return redirect()->route("login")->with("inactive","No tienes permisos para acceder.");
        }

        return $next($request);
    }
}
