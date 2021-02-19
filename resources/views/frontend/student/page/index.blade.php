@extends('frontend.layouts.app')
@section('title')
    الدروس
@endsection
@section('content')
<div class="my-20  min-h-screen">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.student.nav.navbar')

            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">الدروس</h1>
                </div>
                <div class="flex flex-wrap justify-center">
                @for ($i = 0; $i < 6; $i++)
                    <div class="w-1/4 m-4 text-center">
                        <a href="" class=" ">
                            <div class="h-36 bg-gray-500 w-full p-8  flex justify-center items-center my-4 rounded-lg">
                                <div class="w-10 h-10 rounded-full bg-blue-700 opacity-90">
                                    <i class="fas fa-caret-right flex justify-center items-center w-8 h-10 mx-auto text-4xl text-white"></i>
                                </div>
                            </div>
                            <div>
                                <p class="text-xl tracking-wide mb-4">(عنوان الدرس)</p>
                                <p>الأحد 20 ديسمبر</p>
                            </div>
                        </a>
                    </div>
                @endfor
                <div class=" text-center w-4/6 mx-auto my-36">
                    <img src="img/login.svg" alt="" class="h-96 mx-auto my-8">
                    <p class=" text-gray-600">لا يوجد لديك دروس حاليا</p>
                </div>
            </div>
        </div>
            
        </div>
    </div>
</form>

</div>
@endsection