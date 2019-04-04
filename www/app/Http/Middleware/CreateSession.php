<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Request;
use Se

class CreateSession
{
    public function handle($request, Closure $next, $role, $sessionId)
    {  
    	session()->flush();
    	session()->put('sessionId', $sessionId);
        return $next($request);
    }
}
