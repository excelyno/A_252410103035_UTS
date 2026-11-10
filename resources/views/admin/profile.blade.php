@extends('layouts.admin')

@section('title', 'Profile Admin - KopiKita')
@section('page-heading', 'Profile Admin')

@section('content')

    <div class="grid gap-6 lg:grid-cols-3">

        {{-- Informasi utama --}}
        <div class="rounded-2xl bg-white p-8 shadow-sm">

            <div class="flex flex-col items-center text-center">

                <div
                    class="flex h-24 w-24 items-center justify-center rounded-full bg-coffee-100 text-3xl font-bold text-coffee-700">
                    {{ strtoupper(substr($admin['nama'], 0, 1)) }}
                </div>

                <h3 class="mt-5 text-xl font-bold">
                    {{ $admin['nama'] }}
                </h3>

                <p class="mt-1 text-sm text-gray-500">
                    {{ $admin['jabatan'] }}
                </p>

                <span class="mt-4 rounded-full bg-green-100 px-4 py-1 text-xs font-semibold text-green-700">
                    Akun Aktif
                </span>

            </div>

        </div>

        {{-- Detail profil --}}
        <div class="rounded-2xl bg-white p-8 shadow-sm lg:col-span-2">

            <h3 class="text-lg font-bold">
                Informasi Personal
            </h3>

            <div class="mt-6 space-y-5">

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Nama Lengkap
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $admin['nama'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Email
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $admin['email'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Nomor Telepon
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $admin['telepon'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Alamat
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $admin['alamat'] }}
                    </p>
                </div>

                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">
                        Tanggal Bergabung
                    </p>

                    <p class="mt-2 font-medium">
                        {{ $admin['bergabung'] }}
                    </p>
                </div>

            </div>

        </div>

    </div>

@endsection
