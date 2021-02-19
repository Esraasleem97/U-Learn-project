<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Providers\RouteServiceProvider;
use Exception;
use Illuminate\Http\Request;



class LoginController extends Controller
{



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


    public function login(Request $request)
    {

        try {
            if ($user = Auth()->guard('web')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                return back()->with(['errors' => 'خطأ في البريد الالكتروني او كلمة السر']);
            }
            if ($user->type == Teacher::$TYPE)
                return redirect()->to('/')->with(['success' => "{$request->name}   مرحبا "]);
            if ($user->type == Student::$TYPE)
                return redirect()->to('/')->with(['success' => "{$request->name}   مرحبا "]);
            return back()->with(['errors' => 'حدث خطأ ما']);
        } catch (Exception $e) {
            return back()->with(['errors' => 'حدث خطأ ما']);
        }

    }
}
