<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;
use App\Models\Books;

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
        $books = Books::select('year')
            ->orderBy('year')
            ->get()
            ->unique('year')
            ->values();

        return view('frontend.teacher.page.Stage', compact('stages', 'books'));
    }
}
