@extends('frontend.layouts.app')
@section('title')
الإشعارات
@endsection
@section('content')
<div class="my-36">
    <div class="container mx-auto ">
        @include('frontend.student.nav.navbar')

        <div class="w-full lg:w-1/2">
            <div>
                <h1 class="text-3xl font-semibold my-8"><i class="far fa-bell text-main-color"></i> الإشعارات</h1>
            </div>
            <div>
                @for ($i = 0; $i < 5; $i++)
                    <a href="" class=" my-8">
                        <div class="border border-r-8 border-blue-900 py-4 px-4 my-8 rounded-lg">
                            <p>أرسل لك الاستاذ (اسم الاستاذ) رد لمادة (اسم المادة)</p>
                        </div>
                    </a>
                @endfor
            </div>
           
        </div>
        <div class=" text-center w-4/6 mx-auto ">
            <img src="img/ideas.svg" alt="" class="h-96 mx-auto my-8">
            <p class=" text-gray-600">لا يوجد لديك إشعارات حاليا</p>
        </div>
    </div>
</div>
@endsection