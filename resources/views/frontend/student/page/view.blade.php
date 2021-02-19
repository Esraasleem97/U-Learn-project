@extends('frontend.layouts.app')
@section('title')
    المرحلة الدراسية
@endsection
@section('content')
<div class="">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            {{-- @include('frontend.student.nav.navbar') --}}

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
                <form action="">
                    @csrf
                    <div class="w-full md:w-4/5 lg:w-2/3 mx-auto">
                    
                        <div class="input-form mt-20">
                            <textarea name="details" id="details" cols="20" rows="3" placeholder=" " class="input"></textarea>
                            <label for="details" class="label font-bold">إسأل الأستاذ</label>
                        </div>
                        <div class="flex justify-center items-center mt-10">
                            <input type="submit" value="إرسال" class="btn btn-main">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
</div>
@endsection