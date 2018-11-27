<?php

namespace App\Http\Middleware;

use Closure;

class VerifyEmail
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
        if(is_null(auth()->user()->email_verified_at)){
            return redirect('/resend');
        }
        return $next($request);
    }
}
