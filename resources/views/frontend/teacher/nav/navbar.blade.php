<nav class="border-b-2 border-gray-200 py-3">
    <ul class="flex justify-between">
        <div class="flex ">
            <li class="list-border-b relative"><a href="{{route('teacher.stage')}}">المرحلة الدراسية</a></li>
{{--            <li class="mr-8"><a href="{{route('teacher.books')}}">الكتب الدراسية</a></li>--}}
            <li class="mr-8"><a href="{{route('teacher.index')}}">الدروس</a></li>
        </div>
        <div class="flex items-center relative">
            <li class="text-main-color font-medium text-xl"><a><i class="far fa-bell"></i></a></li>
            <li class="mr-4"> | </li>
            <li class="mr-4"><a href="{{route('teacher.logout')}}">تسجيل الخروج</a></li>
        </div>
    </ul>
</nav>
<div class="border bg-gray-50 shadow-md px-12 py-6 my-4 text-2xl tracking-wide">
    <h1>{{auth()->user()->name}}</h1>
</div>
