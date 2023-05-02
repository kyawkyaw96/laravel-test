<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title',env('APP_NAME'))</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class=" m-3">
    <nav class=" border rounded-1 p-3 bg-light">

        <a class=" btn btn-outline-primary" href="{{route('page.home')}}">Home</a>
        <a class=" btn btn-outline-primary" href="{{route('page.about')}}">About</a>
        <a class=" btn btn-outline-primary" href="{{route('page.contact')}}">Contact</a>
        <a href="{{route('page.profile')}}" class=" btn btn-outline-primary">Profile</a>
    </nav>
    
    <section>
        @yield('content')
     
    </section>

    @include('footer')
    @stack('script')
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>