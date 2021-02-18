@extends('studentstage::layouts.master')

@section('content')
<div class=" ">
    <form action="">
        @csrf
        <div class="container mx-auto ">
            <div>
                <h1 class="text-3xl font-semibold my-8">إختر المرحلة الدراسية</h1>
            </div>
            <div class="border shadow-xl rounded-md w-full bg-white py-36 px-12">
                <div class="flex flex-wrap justify-center">
                    @foreach ($stages as $stage)
                    <div class="m-8  flex items-center ">
                        <input type="radio" name="stage" id="stage{{$stage}}">
                        <label for="stage{{$stage}}">
                            <div class="border border-blue-800 rounded-md shadow-md h-24 mx-4 px-4 flex justify-center items-center">
                                {{$stage}}
                            </div>
                        </label>
                    </div>
                    @endforeach
                    
                </div>
                <div class="flex justify-center items-center mt-10">
                    <input type="submit" value="المتابعة" class="btn btn-main">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
