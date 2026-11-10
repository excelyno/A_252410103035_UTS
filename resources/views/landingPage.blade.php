@extends('layouts.customer')

@section('title', 'when yh - KopiKita')

@section('content')


    <section id="home" class="relative isolate flex min-h-[600px] items-center overflow-hidden bg-coffee-900">

        {{-- Background Image --}}
        <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=1800" alt="Suasana coffee shop"
            class="absolute inset-0 -z-20 h-full w-full object-cover">

        {{-- Dark Overlay --}}
        <div class="absolute inset-0 -z-10 bg-gradient-to-r from-coffee-900 via-coffee-900/80 to-coffee-900/20">
        </div>

        {{-- Hero Content --}}
        <div class="mx-auto w-full max-w-7xl px-6 py-24">

            <div class="max-w-2xl text-white">

                {{-- Label --}}
                <span class="text-xs font-bold uppercase tracking-[0.35em] text-amber-300">
                    Crafted With Passion
                </span>

                {{-- Heading --}}
                <h1 class="mt-7 font-display text-5xl font-bold leading-tight md:text-7xl">
                    Secangkir Kopi,
                    <span class="text-amber-300">
                        Sejuta Cerita.
                    </span>
                </h1>

                {{-- Description --}}
                <p class="mt-7 max-w-lg text-base leading-relaxed text-white/70 md:text-lg">
                    Nikmati pengalaman kopi terbaik dari biji pilihan,
                    racikan profesional, dan cita rasa yang selalu berkesan.
                </p>

                {{-- CTA Buttons --}}
                <div class="mt-10 flex flex-wrap items-center gap-4">

                    <a href="#menu"
                        class="rounded-full bg-amber-700 px-8 py-4 text-sm font-bold text-white transition hover:bg-amber-600">
                        Jelajahi Menu →
                    </a>

                    <a href="#about"
                        class="rounded-full border border-white/40 px-8 py-4 text-sm font-bold text-white transition hover:bg-white/10">
                        Tentang Kami
                    </a>

                </div>

            </div>

        </div>

    </section>


    <section class="min-h-screen flex items-center justify-center">

        <div class="text-center">

            <h1 class="font-display text-6xl font-bold text-coffee-700">
                KopiKita.
            </h1>

            <p class="mt-4 text-lg text-gray-600">
                Secangkir kopi, sejuta cerita dengan dirinya, v.
            </p>

        </div>

    </section>
    <sections>

    @endsection
