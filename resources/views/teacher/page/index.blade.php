@extends('frontend.layouts.app')
@section('title')
    إضافة درس
@endsection
@section('content')
<div class="bg-gray-100 my-16">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            @include('frontend.include.navbar')
            
            <div class="border shadow-xl rounded-md w-full bg-white px-12 pb-10">
                <div>
                    <h1 class="text-3xl font-semibold my-8">جميع الدروس</h1>
                </div>
                <div class="w-full sm:w-11/12 md:w-3/4 lg:w-2/3 my-16">
                </div>
                    <table>
                        <thead>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>الملخص</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 5; $i++)
                            <tr>
                                <td>1</td>
                                <td>الدرس الاول</td>
                                <td>الدرس الاول الدرس الاول</td>
                                <td>
                                    <a href="" class="btn btn-info">عرض</a>
                                    <a href="" class="btn btn-success">تعديل</a>
                                    <a href="" class="btn btn-danger">حذف</a>
                                </td>
                            </tr>
                            @endfor
                            
                        </tbody>
                    </table>
               
               
            </div>
        </div>
    </form>
</div>
@endsection
