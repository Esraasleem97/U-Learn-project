@extends('frontend.layouts.app')

@section('title')
    منصة التعليم الإلكتروني
@endsection
@section('content')
{{-- Section Hero --}}
<div class="container">
    <div class=" w-11/12 mx-auto items-center grid grid-cols-2 gap-4">
        <div>
            <div class="flex justify-start w-full">
                <img src="{{asset('/img/k.png')}}" alt="" class=" w-36 h-28 object-cover">
                <h1 class="font-bold text-5xl py-10"><span class="text-main-color">U</span>-learn</h1>
            </div>
            <div class=" w-11/12 mx-10 leading-8">
                <p>
                    منصة عراقية مجانية للتعلّم عن بُعد، توفر لطلبة الجامعات من المرحلة الأول وحتى المرحلة الرابعة دروسًا تعليمية عن طريق مقاطع فيديو مصوَّرة مُنظّمة ومُجدولة وفقًا لمنهاج التعليم العراقي يُقدّمها نخبة متميزة من الأساتذة لتسهّل على الطلبة مواصلة تعلّمهم، ومتابعة موادهم الدراسية.
                </p>
                <p class="my-4 font-medium">
                    تم تطوير هذه المنصة كخدمة مجتمعية
                </p>
            </div>
        </div>
        <div>
            <img src="{{asset('/img/book.svg')}}" alt="">
        </div>
    </div>
</div>

{{-- Section login --}}

<div class="section-login my-16 relative">
    <img src="{{asset('/img/2.jpg')}}" alt="" class="w-screen z-0">
    <div class="z-10 absolute left-0 top-12 text-center mx-auto w-4/6">
        <p class="text-5xl ">
            ابدأ مشوار التعلم عن بعد
        </p>
        <div class="flex flex-col mt-16 justify-center w-3/6 mx-auto">
            <a href="{{route('login-student')}}" class="btn btn-login">تسجيل دخول للطلبة</a>
            <a href="{{route('login-teacher')}}" class="btn btn-login">تسجيل دخول للأساتذة</a>
        </div>
    </div>

</div>

{{-- Section step by step --}}
<div class="container mx-10">
    <div class=" w-11/12 mx-auto items-center grid grid-cols-2 gap-4 ">
        <div>
            <div class="flex justify-start w-full">
                <h1 class="font-bold text-5xl py-10 text-gray-800">آلية التعلم</h1>
            </div>
            <div class=" w-11/12 leading-8">
                <p>
                    يمكنك استخدام منصة <span class="font-bold"><span class="text-main-color">U</span>-learn</span> عن بعد بكل سهولة ويسر من المرحلة الدراسية الاولى وحتى المرحلة الدراسية الرابعة ، حيث يمكنك اختيار مرحلتك من الصفحة الرئيسية ثم اختيار المادة التعليمية ضمن جدول الدروس الأسبوعي.                </p>

            </div>
        </div>
        <div>
            <img src="{{asset('/img/k.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection
