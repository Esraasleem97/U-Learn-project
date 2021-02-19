<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;

class LessonController extends Controller
{

    public function index()
    {
        return view('frontend.teacher.page.index');
    }

    public function create()
    {
        return view('frontend.teacher.page.add');
    }

    public function store()
    {

    }
}
