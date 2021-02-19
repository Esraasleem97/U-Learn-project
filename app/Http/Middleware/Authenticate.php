<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * @param Request $request
     * @return RedirectResponse|string|null
     */
    protected function redirectTo($request)
    {

        if ($request->is('teacher/*')) {
            return route('login-teacher');

        }
        if ($request->is('student/*')) {
            return route('login-student');

        }

    }
}
