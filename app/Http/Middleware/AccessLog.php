<?php

namespace App\Http\Middleware;

use Closure;
use App\LogDashboard;

class AccessLog
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
        $response = $next($request);
        LogDashboard::create([
            'path' => $request->path(),
            'method' => $request->method(),
            'ip' => $request->getClientIp(),
            'payload' => (empty($request->all()) || is_null($request->all())) ? null : json_encode($request->all()),
            'user_id' => (empty(auth()->user()) || is_null(auth()->user())) ? null : auth()->user()->id
        ]);
        return $response;
    }
}
