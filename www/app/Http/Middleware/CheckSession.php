<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckSession
{

    public function handle($request, Closure $next)
    {  
            if (!$request->session()->exists('sessionId')) {
            // user value cannot be found in session
                return redirect()->route('login');
            }

        return $next($request);
    }
}
