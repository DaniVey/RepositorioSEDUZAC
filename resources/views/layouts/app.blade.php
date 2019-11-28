<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app"></div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
