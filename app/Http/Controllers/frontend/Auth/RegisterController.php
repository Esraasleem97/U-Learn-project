<?php

namespace App\Http\Controllers\frontend\Auth;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    public $validator, $isStudent = false, $isTeacher = false, $route;

    public function Student()
    {
        $name = "للطلبة";
        return view('frontend.auth.student-register', compact('name'));
    }

    public function Teacher()
    {
        $name = "للأساتذة";
        return view('frontend.auth.teacher-register', compact('name'));
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    protected function create(Request $request)
    {

        $this->Validator($request);

        if ($this->validator->fails()) {
            return back()->with(
                'errors',
                $this->validator->messages()->all()[0]
            )->withInput();
        }

        try {
            $this->CreatingUserType($request);

            if ($this->isStudent) $this->route = 'login-student';
            if ($this->isTeacher) $this->route = 'login-teacher';

            return redirect()
                ->route($this->route)
                ->with('success', 'يمكنك تسجيل الدخول الان');
        } catch (Exception $e) {
            return back()->with(['errors' => 'حدث خطأ ما']);
        }


    }


    protected function Validator($request): void
    {

        $this->validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
            [
                'name.required' => "يجب ادخال اسم المستخدم",
                'email.required' => "يجب ادخال البريد الالكتروني",
                'password.required' => "يجب اخال كلمة السر",
                'password.confirmed' => "كلمة السر غير متطابقة",
                'password.min' => "يجب ادخال 8 حقول على الاقل",
            ]
        );

    }

    /**
     * @param $request
     * @return bool
     * @throws Exception
     */
    protected function CreatingUserType($request)
    {
        $user = new User;
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->token = User::generateToken();

        if ($request->is('register/teacher')) {
            $user->type = Teacher::$TYPE;
            $this->isTeacher = true;

        } elseif ($request->is('register/student')) {
            $user->type = Student::$TYPE;
            $this->isStudent = true;
        } else {
            $this->NotFoundRequestException();
        }
        return $user->save();
    }


    /**
     * @throws Exception
     */
    protected function NotFoundRequestException()
    {
        throw new Exception('invalid route request');
    }
}
