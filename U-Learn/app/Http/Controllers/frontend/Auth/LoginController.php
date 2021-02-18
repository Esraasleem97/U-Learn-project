<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;


class LoginController extends Controller
{


    protected $redirectTo = RouteServiceProvider::HOME;

    public function SubmitLoginStudent()
    {
        $name = "للطلبة";
        return view('frontend.auth.login', compact('name'));
    }

    public function SubmitLoginTeacher()
    {
        $name = "للأساتذة";
        return view('frontend.auth.login', compact('name'));
    }


    public function Login(Request $request)
    {
        try {

            if (Auth()->guard('web')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return back()->with(['error' => 'خطأ في البريد الالكتروني او كلمة السر']);
            }
            return redirect()->route('admin.dashboard')->with(['success' => "{$request->name}   مرحبا "]);
        } catch (Exception $e) {
            return redirect()->route('get.admin.login')->with(['error' => 'حدث خطأ ما']);
        }
    }
}
