<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{mix('css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>

    <title>@yield('title')</title>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-start">
        <header>
            @include('partials.nav')
            @include('partials.sessions-status')
        </header>

        <main>
            @yield('contenido')
        </main>

        <div class="footer">
            Copyright @ {{date('Y')}}
        </div>
    </div>

</body>
</html>