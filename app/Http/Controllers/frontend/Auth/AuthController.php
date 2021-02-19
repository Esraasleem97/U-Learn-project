<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{


    protected $redirectTo = RouteServiceProvider::HOME;

    public function Student()
    {
        $name = "للطلبة";
        return view('frontend.auth.student-login', compact('name'));
    }

    public function Teacher()
    {
        $name = "للأساتذة";
        return view('frontend.auth.teacher-login', compact('name'));
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->is('login/teacher'))
                return redirect()->to('/')->with(['success' => "   مرحبا "]);
            if ($request->is('login/student'))
                return redirect()->to('/')->with(['success' => "  مرحبا "]);
            return back()->with(['errors' => 'حدث خطأ ما']);
        }

        return back()->with(['errors' => 'خطأ في البريد الالكتروني او كلمة السر']);
    }


    public function logout()
    {
        Auth::logout();

        return back()->with(['success' => 'تم تسجيل الخروج بنجاح']);

    }

}
