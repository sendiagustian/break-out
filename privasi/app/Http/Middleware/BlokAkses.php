<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth ;

class BlokAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $level)
    {
        $tb_id_level = Auth::user()->level ;

            if( $level == $tb_id_level  ) {
                return abort(404) ;
            }

        return $next($request);
    }
}
