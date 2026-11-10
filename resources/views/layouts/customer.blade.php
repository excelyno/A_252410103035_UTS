<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KopiKita')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-coffee-50 font-sans text-coffee-900 antialiased">

    {{-- Navbar --}}
    <header>
        @yield('navbar')
    </header>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer>
        @yield('footer')
    </footer>

</body>

</html>
