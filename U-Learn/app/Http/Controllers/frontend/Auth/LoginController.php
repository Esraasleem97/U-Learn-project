<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;


class LoginController extends Controller
{


    public function SubmitLoginStudent(){
        $name ="للطلبة";
        return view('frontend.auth.login',compact('name'));
    }
    public function SubmitLoginTeacher(){
        $name ="للأساتذة";
        return view('frontend.auth.login',compact('name'));
    }
}
