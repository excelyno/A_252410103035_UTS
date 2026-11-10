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

    <footer class="bg-coffee-900 text-white">

        <div class="mx-auto max-w-7xl px-6 py-16">

            {{-- Footer Main --}}
            <div class="grid gap-12 md:grid-cols-3">

                {{-- Brand --}}
                <div>
                    <a href="/" class="text-3xl font-extrabold tracking-tight">
                        Kopi<span class="text-amber-400">Kita.</span>
                    </a>

                    <p class="mt-5 max-w-xs text-sm leading-relaxed text-white/50">
                        Secangkir kopi, sejuta cerita.
                        Menghadirkan pengalaman kopi terbaik
                        untuk menemani setiap momenmu.
                    </p>
                </div>

                {{-- Navigation --}}
                <div>
                    <h3 class="font-bold">Navigasi</h3>

                    <ul class="mt-5 space-y-3 text-sm text-white/50">
                        <li>
                            <a href="/" class="transition hover:text-amber-400">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="/#menu" class="transition hover:text-amber-400">
                                Menu Kopi
                            </a>
                        </li>

                        <li>
                            <a href="/#about" class="transition hover:text-amber-400">
                                Tentang Kami
                            </a>
                        </li>

                        <li>
                            <a href="/#contact" class="transition hover:text-amber-400">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Contact --}}
                <div>
                    <h3 class="font-bold">Hubungi Kami</h3>

                    <ul class="mt-5 space-y-3 text-sm text-white/50">
                        <li>Jember, Jawa Timur</li>
                        <li>kopikita@example.com</li>
                        <li>Senin - Minggu</li>
                        <li>08.00 - 22.00 WIB</li>
                    </ul>
                </div>

            </div>

            {{-- Copyright --}}
            <div class="mt-14 border-t border-white/10 pt-7">

                <div class="flex flex-col justify-between gap-4 text-sm text-white/40 md:flex-row">

                    <p>
                        © {{ date('Y') }} KopiKita. All rights reserved.
                    </p>

                    <p>
                        Crafted with passion
                    </p>

                </div>

            </div>

        </div>

    </footer>


</body>

</html>
