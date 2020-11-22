<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;


class RestolienMiddleware
{
    public function __construct(Guard $auth = null) {
        $this->auth = $auth;
    }
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()['level'] != "1" || "5" || "4") {
            abort('404');
        }
        return $next($request);
    }
}
