<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;


class AccessControlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    use AuthorizesRequests;
    public function handle(Request $request, Closure $next): Response
    {
        $routeName        =   $request->route()->getname();

      
        $ignoreResource    =   config('accesscontrollist')['ignore.resource'];
        
        if(!in_array($routeName,$ignoreResource)){
         
            $this->authorize($routeName);
            
                
           
        } 
       
            
        
          
        return $next($request);
    }
}
