    @extends('layouts.admin')

    @section('title', 'Dashboard - KopiKita')
    @section('page-heading', 'Dashboard Overview')

    @section('content')

        <div class="grid gap-6 md:grid-cols-3">

            <div class="rounded-2xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">Total Menu</p>
                <h3 class="mt-3 text-3xl font-bold">24</h3>
                <p class="mt-2 text-xs text-green-600">Menu tersedia</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">Total Pesanan</p>
                <h3 class="mt-3 text-3xl font-bold">128</h3>
                <p class="mt-2 text-xs text-green-600">Pesanan bulan ini</p>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm">
                <p class="text-sm text-gray-500">Pendapatan</p>
                <h3 class="mt-3 text-3xl font-bold">Rp4,8jt</h3>
                <p class="mt-2 text-xs text-green-600">Pendapatan bulan ini</p>
            </div>

        </div>

        <div class="mt-8 rounded-2xl bg-white p-6 shadow-sm">
            <h3 class="text-lg font-bold">Aktivitas Terbaru</h3>

            <p class="mt-3 text-sm text-gray-500">
                Belum ada aktivitas yang tercatat.
            </p>
        </div>

    @endsection
