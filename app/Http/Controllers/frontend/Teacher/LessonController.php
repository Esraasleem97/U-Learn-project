<?php


namespace App\Http\Controllers\frontend\Teacher;


use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLessonRequests;
use App\Models\Books;
use App\Models\Lessons;

class LessonController extends Controller
{

    public function index()
    {
        $lessons = Lessons::where(['teacher_id' => auth()->id()])->with('book')->get();
        return view('frontend.teacher.page.index', compact('lessons'));
    }

    public function create($id)
    {
        $book = Books::findOrFail($id)->first();
        return view('frontend.teacher.page.add', compact('book'));
    }

    public function store(CreateLessonRequests $request)
    {

        $file = $this->uploadFiles('videos', $request->media);

        Lessons::create([
            'title' => $request->title,
            'details' => $request->details,
            'media' => $file,
            'book_id' => $request->book_id,
            'teacher_id' => $request->teacher_id
        ]);
        return redirect()->route('teacher.index')->with('success', 'تم اضافة الدرس بنجاح');
    }
}
