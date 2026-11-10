@extends('layouts.admin')

@section('title', 'Menu - KopiKita')
@section('page-heading', 'Daftar Menu')

@section('content')

    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

        <div class="border-b border-gray-100 p-6">
            <h3 class="text-lg font-bold">Menu KopiKita</h3>
            <p class="mt-1 text-sm text-gray-500">
                Daftar produk yang tersedia.
            </p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">

                <thead class="bg-gray-50 text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Nama Menu</th>
                        <th class="px-6 py-4">Kategori</th>
                        <th class="px-6 py-4">Harga</th>
                        <th class="px-6 py-4">Stok</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($menus as $menu)
                        <tr class="border-t border-gray-100">
                            <td class="px-6 py-4 font-semibold">
                                {{ $menu['nama'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $menu['kategori'] }}
                            </td>

                            <td class="px-6 py-4">
                                Rp{{ number_format($menu['harga'], 0, ',', '.') }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $menu['stok'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection
