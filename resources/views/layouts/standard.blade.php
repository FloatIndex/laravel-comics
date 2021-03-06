<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel='stylesheet' href="{{asset('css/app.css')}}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200;300;400;600;700&display=swap" rel="stylesheet"> 
    
    @yield('specificCss')

</head>
<body>

    @include('partials.header')


    <main>
        @include('partials.jumbo')
        @yield('content')
        @include('partials.shopping')
    </main>


    <footer>
        @include('partials.footer')
    </footer>

    
</body>
</html>