@extends('layouts.customer')

@section('title', 'Masuk - KopiKita')

@section('content')
    <section class="flex min-h-[75vh] items-center justify-center px-6 py-16">
        <div class="w-full max-w-md rounded-3xl border border-coffee-100 bg-white p-8 shadow-xl">

            <div class="mb-8 text-center">
                <h1 class="font-display text-3xl font-bold text-coffee-900">
                    Selamat Datang
                </h1>

                <p class="mt-2 text-sm text-gray-500">
                    Masuk ke akun KopiKita kamu.
                </p>
            </div>

            <form action="#" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold">
                        Email
                    </label>

                    <input type="email" id="email" name="email" placeholder="nama@email.com"
                        class="w-full rounded-xl border border-coffee-100 px-4 py-3 outline-none transition focus:border-coffee-500 focus:ring-2 focus:ring-coffee-500/20">
                </div>

                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold">
                        Password
                    </label>

                    <input type="password" id="password" name="password" placeholder="Masukkan password"
                        class="w-full rounded-xl border border-coffee-100 px-4 py-3 outline-none transition focus:border-coffee-500 focus:ring-2 focus:ring-coffee-500/20">
                </div>

                <button type="submit"
                    class="w-full rounded-xl bg-coffee-700 py-3 font-semibold text-white transition hover:bg-coffee-500">
                    Masuk
                </button>
            </form>

            <p class="mt-6 text-center text-xs text-gray-400">
                © {{ date('Y') }} KopiKita
            </p>

        </div>
    </section>
@endsection
