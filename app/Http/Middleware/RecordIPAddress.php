<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecordIPAddress
{
    public function handle(Request $request, Closure $next, $importance, $user)
    {
        /*
        $ipAddress = $request->ip();
        $path = $request->path();
        print("<p>IPアドレスは".$ipAddress."でパスは".$path."</p>");
        return $next($request);
        */
        $response = $next($request);
        $ipAddress = $request->ip();
        $path = $request->path();
        print("<p>IPアドレスは".$ipAddress."でパスは".$path."</p>");
        print("<p>重要度: ".$importance."</p>");
        print("<p>ユーザー種: ".$user."</p>");
        return $response;
    }
}
