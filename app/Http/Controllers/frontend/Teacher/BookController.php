<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;

class BookController  extends Controller
{

    public function index()
    {
        $books=['قواعد بيانات','برمجة كينونة','شبكات الحاسوب','معالجة الوسائط الرقمية'];
        return view('frontend.teacher.page.Book',compact('books'));
    }
}
