<?php

namespace App\Http\Middleware;

use Closure;
use App\user;

class test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$name,$name1)
    {
        $user = user::find(1);
        if($name == $user->name && $name1 == $user->name)
        {
            throw new \Exception("Your Ip is correct");
            
        }else
        {
        return $next($request);

        }
        
    }
}
