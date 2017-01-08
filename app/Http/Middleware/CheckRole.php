<?php

namespace App\Http\Middleware;

use Closure;


class CheckRole
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
        //ako pokusamo da pristupimo ako nismo logovani, vracamo se nazad
        if($request->user()===null){
            return response("Insufficient permissions", 401);
        }
        /*actions je niz u routes.php gde su kljucevi uses i as
        $actions = $request->route()->getAction();
        $admins = isset($actions['admin']) ? $actions['admin'] : null; */

        if($request->user()->isAdmin()) {
            return $next($request);
        }
        return response("Insufficient permissions", 401);
    }
}
