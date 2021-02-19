<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:web');
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function SubmitLoginStudent()
    {
        $name = "للطلبة";
        return view('frontend.auth.student-login', compact('name'));
    }

    public function SubmitLoginTeacher()
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

}
