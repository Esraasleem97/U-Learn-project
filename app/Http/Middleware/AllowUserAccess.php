<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AllowUserAccess
{

    public $invalidType = ['errors' => '  لم يقم المسؤول بتوثيق حسابك حتى الان'];

    /**
     * @param Request $request
     * @param Closure $next
     * @param $type
     * @return mixed
     *  all types  is ['teacher', 'student']
     */
    public function handle(Request $request, Closure $next, $type)
    {

        if (Auth()->check() && Auth()->user()->type == $type) {
            if (Auth()->user()->is_verified) return $next($request);
            Auth()->logout();
            if ($type == 'teacher')
                return redirect()->route('login-teacher')
                    ->with($this->invalidType);
            if ($type == 'student')
                return redirect()->route('login-student')
                    ->with($this->invalidType);
        }
        return redirect()->to('/')->with('errors', 'لا تملك صلاحية للوصول الى هذه الصفحة');
    }
}
