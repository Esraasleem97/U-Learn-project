@extends('frontend.layouts.app')
@section('title')
    إضافة درس
@endsection
@section('content')
<div class=" ">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.include.navbar')
            
            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">إضافة درس جديد</h1>
                </div>
                <div>
                    <div class="input-form">
                        <input type="text" id="title" name="title" placeholder=" " class="input" />
                        <label for="title" class="label">العنوان</label>
                    </div>
                </div>
                <div class="flex justify-center items-center mt-10">
                    <input type="submit" value="تأكيد" class="btn btn-main">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
