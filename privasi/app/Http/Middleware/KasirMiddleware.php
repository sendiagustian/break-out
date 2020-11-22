<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class KasirMiddleware
{
    public function __construct(Guard $auth = null) {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()['level'] != "3") {
            abort('404');
        }
        return $next($request);
    }

}
