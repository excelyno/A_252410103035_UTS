<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin KopiKita')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-coffee-50 text-coffee-900">

    <div class="flex min-h-screen">

        {{-- Sidebar --}}
        <aside class="w-64 bg-coffee-900 p-6 text-white">

            <h1 class="text-2xl font-bold">
                Kopi<span class="text-amber-400">Kita.</span>
            </h1>

            <p class="mt-2 text-xs text-white/50">
                Administration Panel
            </p>

            <nav class="mt-10 space-y-2">

                <a href="/admin/dashboard" class="block rounded-xl bg-white/10 px-4 py-3 text-sm">
                    Dashboard
                </a>

                <a href="/admin/menu" class="block rounded-xl px-4 py-3 text-sm transition hover:bg-white/10">
                    Menu
                </a>

                <a href="/admin/inventaris" class="block rounded-xl px-4 py-3 text-sm transition hover:bg-white/10">
                    Inventaris
                </a>

                <a href="/admin/profile" class="block rounded-xl px-4 py-3 text-sm transition hover:bg-white/10">
                    Profile
                </a>

            </nav>

        </aside>

        {{-- Main Content --}}
        <main class="flex-1 p-8">

            <header class="mb-8 flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold">
                        @yield('page-heading', 'Dashboard')
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Selamat datang di panel administrasi KopiKita.
                    </p>
                </div>

                <a href="/" class="rounded-xl border border-coffee-100 bg-white px-4 py-2 text-sm font-semibold">
                    Lihat Website
                </a>
            </header>

            @yield('content')

        </main>

    </div>

</body>

</html>
