<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;
use App\Models\Books;

class BookController extends Controller
{

    public function show($year)
    {
        $books = Books::where(['year' => $year])->get();
        if (!isset($books[0])) return redirect()
            ->route('teacher.stage')
            ->with('errors', 'هذا الكتاب غير موجود');
        return view('frontend.teacher.page.Book', compact('books'));
    }
}
