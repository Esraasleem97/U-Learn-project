<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;

class StageController extends Controller
{

    public function index()
    {
        $stages = [
            'المرحلة الدراسية الأولى',
            'المرحلة الدراسية الثانية',
            'المرحلة الدراسية الثالثة',
            'المرحلة الدراسية الرابعة'
        ];
        return view('frontend.teacher.page.Stage', compact('stages'));
    }
}
