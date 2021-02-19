@extends('frontend.layouts.app')
@section('title')
 عنوان الدرس
@endsection
@section('content')
<div class="">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.student.nav.navbar')

            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">عنوان الدرس</h1>
                </div>
                <div class="w-full md:w-4/5 lg:w-2/3 font-semibold my-8">
                    <p>
                        الملخص الملخص الملخص الملخص الملخص الملخص الملخص الملخص
                        الملخص الملخص الملخص الملخص الملخص الملخص الملخص الملخص
                    </p>
                </div>
                <div class="w-full lg:w-4/5 mx-auto">
                    <video id="player" controls class="w-full">
                        <source src="/video/video.mp4" type="video/mp4" />
                        <source src="/video/video.ogg" type="video/ogg" />
                    </video>
                </div>
               
                    <div class="w-full md:w-4/5 lg:w-2/3 mx-auto  mt-24">
                        <div class="text-sm border border-r-8 border-blue-900 py-4 px-4 my-8 flex justify-between items-center rounded-md">
                            <p class="">سؤال الطالب</p>
                            <a href="" class="text-red-600">حذف</a>
                        </div>
                        <div class="text-sm border border-r-8 border-blue-900 py-4 px-4 my-8 flex justify-between items-center rounded-md mr-8">
                            <p class="">رد المعلم</p>
                            <a href="" class="text-red-600">حذف</a>
                        </div>
                        <div class="input-form">
                            <textarea name="details" id="details" cols="20" rows="3" placeholder=" " class="input"></textarea>
                            <label for="details" class="label font-bold">إسأل الأستاذ أو رد الأستاذ</label>
                        </div>
                        <div class="flex justify-center items-center mt-10">
                            <input type="submit" value="إرسال" class="btn btn-main">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection