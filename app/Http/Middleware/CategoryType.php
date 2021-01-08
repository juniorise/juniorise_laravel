<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CategoryType
{
    protected $allowedTypes = ['computer-science','network-telecom','architecture','civil-engineer','doctor','biology-engineer'];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $route = $request->route();
        if (!in_array($route->parameter('category'), $this->allowedTypes)) {
            return redirect()->route('errors');
        }
        return $next($request);
    }
}
