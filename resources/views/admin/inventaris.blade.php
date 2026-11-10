@extends('layouts.admin')

@section('title', 'Inventaris - KopiKita')
@section('page-heading', 'Manajemen Inventaris')

@section('content')

    <div class="overflow-hidden rounded-2xl bg-white shadow-sm">

        <div class="border-b border-gray-100 p-6">
            <h3 class="text-lg font-bold">Stok Bahan Baku</h3>
            <p class="mt-1 text-sm text-gray-500">
                Pantau ketersediaan bahan baku kedai.
            </p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">

                <thead class="bg-gray-50 text-gray-500">
                    <tr>
                        <th class="px-6 py-4">Nama Bahan</th>
                        <th class="px-6 py-4">Stok</th>
                        <th class="px-6 py-4">Minimum</th>
                        <th class="px-6 py-4">Status</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($inventaris as $item)
                        <tr class="border-t border-gray-100">

                            <td class="px-6 py-4 font-semibold">
                                {{ $item['bahan'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item['stok'] }} {{ $item['satuan'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $item['minimum'] }} {{ $item['satuan'] }}
                            </td>

                            <td class="px-6 py-4">
                                @if ($item['stok'] <= $item['minimum'])
                                    <span class="rounded-full bg-red-100 px-3 py-1 text-xs font-semibold text-red-700">
                                        Stok Menipis
                                    </span>
                                @else
                                    <span class="rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                                        Tersedia
                                    </span>
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>

@endsection
