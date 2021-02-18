<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function Stage()
    {
        $stages=['المرحلة الدراسية الأولى','المرحلة الدراسية الثانية','المرحلة الدراسية الثالثة','المرحلة الدراسية الرابعة'];
        return view('public.page.Stage',compact('stages'));
    }
}
