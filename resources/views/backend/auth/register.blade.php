@extends('frontend.layouts.app')

@section('title')
   تسجيل
@endsection
@section('content')
<div class="bg-gray-100 p-4">
<div class="container m-auto px-8">
<div class="grid grid-cols-2 gap-4">
<form class="mx-auto rounded-lg shadow-xl overflow-hidden p-6 space-y-10 bg-white w-7/12">
    @csrf
  <h2 class="text-2xl font-bold text-center">تسجيل</h2>
  <div class="input-form">
    <input type="text" id="username" name="username" placeholder=" " class="input" />
    <label for="username" class="label"><i class="far fa-user"></i> الاسم الأول</label>
  </div>
  <div class="input-form">
    <input type="email" id="email" name="email" placeholder=" " class="input" />
    <label for="email" class="label"><i class="ti ti-email relative top-px"></i> البريد الإلكتروني</label>
  </div>
  <div class="input-form">
    <input type="password"  id="password" name="password" placeholder=" " class="input" />
    <label for="password" class="label"><i class="ti ti-lock"></i> كلمة المرور</label>
  </div>
  <div class="input-form">
    <input type="password"  id="confirm_password" name="confirm_password" placeholder=" " class="input" />
    <label for="confirm_password" class="label"><i class="ti ti-lock"></i> تأكيد كلمة المرور</label>
  </div>
  
  <div class="my-12 flex justify-center w-full">
    <a href="{{route('Stage')}}" class="btn btn-main">تسجيل</a>
</div>
</form>
<div>
    <img src="/img/login.svg" alt="">
</div>
</div>
</div>
</div>
@endsection