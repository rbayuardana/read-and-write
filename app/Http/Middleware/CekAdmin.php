<?php

namespace App\Http\Middleware;

use Closure;

//ini middleware untuk validasi apakah yang mengakses route itu admin atau bukan
class CekAdmin
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
        if(auth()->user()->email == 'admin@admin.com'){
            return $next($request);
        }
        return response()->view('error.404');
    }
}
