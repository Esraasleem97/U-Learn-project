<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/@icon/themify-icons/themify-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body dir="rtl">
    <div class="container mx-auto">
        @include('frontend.Include.Header')
    </div>
        @yield('content')
        @include('frontend.Include.Footer')
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/uploadVideo.js')}}"></script>
</body>
</html>
