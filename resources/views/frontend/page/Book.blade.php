@extends('frontend.layouts.app')
@section('title')
    المرحلة الدراسية
@endsection
@section('content')
<div class=" ">
    <form action="">
        @csrf
        <div class="container mx-auto ">
<<<<<<< HEAD

            @include('frontend.include.navbar')
=======
            @include('public.include.navbar')
>>>>>>> main

            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">إختر المادة</h1>
                </div>
                <div class="flex flex-wrap justify-center py-8">
                    @foreach ($books as $book)

                    <a href="{{route('add')}}" class="stage m-4 w-full sm:w-3/6 md:w-2/5 lg:w-1/3 xl:w-1/5">
                        <p class="transition duration-300">{{$book}}</p> 
                        <i class="fas fa-arrow-left mt-2 text-main-color"></i>
                    </a>
                    <a href="{{route('add')}}" class="stage m-4 w-full sm:w-3/6 md:w-2/5 lg:w-1/3 xl:w-1/5">
                        <p class="transition duration-300">{{$book}}</p> 
                        <i class="fas fa-arrow-left mt-2 text-main-color"></i>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
    </form>
</div>
@endsection
