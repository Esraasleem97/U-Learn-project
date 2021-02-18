<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function Book()
    {
        $books=['قواعد بيانات','برمجة كينونة','شبكات الحاسوب','معالجة الوسائط الرقمية'];
        return view('public.page.Book',compact('books'));
    }
}
