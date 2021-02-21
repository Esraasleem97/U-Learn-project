<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllowUserAccess
{
    /**
     * @param Request $request
     * @param Closure $next
     * @param $type
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if (Auth()->check() && Auth()->user()->type == $type  ){
            if (Auth()->user()->is_verified) return $next($request);
            return redirect()->to('/')->with('errors', 'لم يقم المسؤول بتوثيق الصلاحية');
        }
        return redirect()->to('/')->with('errors', 'لا تملك صلاحية للوصول الى هذه الصفحة');
    }
}
