<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function SubmitLoginStudent(){
        $name ="للطلبة";
        return view('public.auth.login',compact('name'));
    }
    public function SubmitLoginTeacher(){
        $name ="للأساتذة";
        return view('public.auth.login',compact('name'));
    }
}
