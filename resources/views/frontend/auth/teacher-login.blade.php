@extends('frontend.layouts.app')

@section('title')
    تسجيل الدخول
@endsection
@section('content')
    <div class="bg-gray-100 p-4">
        <div class="container m-auto px-8">
            <div class="grid grid-cols-2 gap-4">
                <form action="{{route('teacher.login')}}" method="post"
                      class="mx-auto rounded-lg shadow-xl overflow-hidden p-6 space-y-10 bg-white w-7/12">
                    @csrf
                    <h2 class="text-2xl font-bold text-center">تسجيل الدخول</h2>
                    <div class="input-form">
                        <input type="email" id="email" name="email" placeholder=" " class="input"/>
                        <label for="email" class="label"><i class="ti ti-email relative top-px"></i> البريد
                            الإلكتروني</label>
                    </div>
                    <div class="input-form">
                        <input type="password" id="password" name="password" placeholder=" " class="input"/>
                        <label for="password" class="label"><i class="ti ti-lock"></i> كلمة المرور</label>
                    </div>

                    <div class="flex justify-center w-full">
                        <input type="submit" class="btn btn-main" value="تسجيل الدخول">
                    </div>
                    <div class="w-full text-center">
                        <a href="{{route('teacher.register')}}" class="text-sm text-main-color hover:underline">إنشاء
                            حساب</a>
                    </div>
                </form>
                <div>
                    <img src="{{asset('/img/login.svg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
