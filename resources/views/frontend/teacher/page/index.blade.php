@extends('frontend.layouts.app')
@section('title')
الدروس
@endsection
@section('content')
<div class="bg-gray-100 my-20">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.teacher.nav.navbar')

            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">جميع الدروس</h1>
                </div>
                <div class="w-full sm:w-11/12 md:w-3/4 lg:w-2/3 my-16">
                </div>
                    <table>
                        <thead>
                            <th>#</th>
                            <th>اسم المادة</th>
                            <th>العنوان</th>
                            <th>الملخص</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($lessons as $key => $lesson)
                            <tr>
                                <td>{{$key++}}</td>
                                <td>{{$lesson->book->name}}</td>
                                <td>{{$lesson->title}}</td>
                                <td>{{substr($lesson->details , 0 , 15) . '...'}}</td>
                                <td>
                                    <a href="" class="btn btn-info">عرض</a>
                                    <a href="" class="btn btn-success">تعديل</a>
                                    <a href="" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class=" text-center w-4/6 mx-auto my-36">
                        <img src="img/login.svg" alt="" class="h-96 mx-auto my-8">
                        <p class=" text-gray-600">لا يوجد لديك دروس حاليا</p>
                    </div>
            </div>
        </div>
    </form>
</div>
@endsection
