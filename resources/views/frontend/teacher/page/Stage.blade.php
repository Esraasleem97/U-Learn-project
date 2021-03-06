@extends('frontend.layouts.app')
@section('title')
    المرحلة الدراسية
@endsection
@section('content')
    <div class=" ">
        <form action="">
            @csrf
            <div class="container mx-auto ">
                @include('frontend.teacher.nav.navbar')

                <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                    <div>
                        <h1 class="text-3xl font-semibold my-8">إختر المرحلة الدراسية</h1>
                    </div>
                    <div class="flex flex-wrap justify-center py-8">
                        @foreach ($stages as $key => $stage)

                            <a href="{{route('teacher.books' , $books[$key]->year )}}"
                               class="stage m-4 w-full sm:w-3/6 md:w-2/5 lg:w-1/3 xl:w-1/5">
                                <p class="transition duration-300">{{$stage}}</p>
                                <i class="fas fa-arrow-left mt-2 text-main-color"></i>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
