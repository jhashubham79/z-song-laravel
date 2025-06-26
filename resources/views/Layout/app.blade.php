<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Your Site')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add other meta and CSS files -->
</head>
<body>

    {{-- HEADER --}}
    @include('layout.header')

    {{-- MAIN PAGE CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('layout.footer')

    <!-- Add JS scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
