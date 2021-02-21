@extends('frontend.layouts.app')
@section('title')
    عنوان الدرس
@endsection
@section('content')
<div class="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.teacher.nav.navbar')

            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">{{$lesson -> title}}</h1>
                </div>
                <div class="w-full md:w-4/5 lg:w-2/3 font-semibold my-8">
                    <p>
                      {{$lesson -> details}}
                    </p>
                </div>
                <div class="w-full lg:w-4/5 mx-auto">
                    <video id="player" controls class="w-full h-full">
                        <source src="{{asset($lesson->media)}}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>
</div>
@endsection
