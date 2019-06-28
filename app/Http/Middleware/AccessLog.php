<?php

namespace App\Http\Middleware;

use Closure;

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
        // buat log
        DB::table('access_logs')->insert([
            'path' => $request->path()->nullable(),
            'ip' => $request->getClientIp()->nullable(),
            'request' => $request->getClientIp()->default('test')->nullable(),
            'created_at' => new DateTime,
            'updated_at' => new DateTime
        ]);
        return $response;
    }
}
