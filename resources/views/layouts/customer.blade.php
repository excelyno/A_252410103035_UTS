<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KopiKita')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-coffee-50 font-sans text-coffee-900 antialiased">

    {{-- Navbar --}}

    <header class="sticky top-0 z-50 border-b border-coffee-100 bg-coffee-50/95 backdrop-blur-md">

        <nav class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5">

            {{-- Logo --}}
            <a href="/" class="text-2xl font-extrabold tracking-tight">
                Kopi<span class="text-coffee-500">Kita.</span>
            </a>

            {{-- Navigation --}}
            <div class="hidden items-center gap-8 text-sm font-medium md:flex">

                <a href="/" class="transition hover:text-coffee-500">
                    Home
                </a>

                <a href="/#menu" class="transition hover:text-coffee-500">
                    Menu
                </a>

                <a href="/#about" class="transition hover:text-coffee-500">
                    Tentang Kami
                </a>

                <a href="/#contact" class="transition hover:text-coffee-500">
                    Kontak
                </a>

            </div>

            {{-- Action Buttons --}}
            <div class="flex items-center gap-4">

                <a href="/login" class="hidden text-sm font-semibold transition hover:text-coffee-500 sm:block">
                    Masuk
                </a>

                <a href="/#menu"
                    class="rounded-full bg-coffee-700 px-6 py-3 text-sm font-semibold text-white transition hover:bg-coffee-500">
                    Pesan Sekarang
                </a>

            </div>

        </nav>

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
