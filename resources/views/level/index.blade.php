@extends('layouts.admin')

@section('title', 'Listrik Praktis | Level')

@section('content')

    {{--  Content --}}
    <div class="container">
        <div class="mt-3 pb-4">
            <label for="table-search" class="sr-only">Search</label>

            {{-- button tambah pelanggan --}}
            <div class="flex md:flex-row flex-col-reverse gap-y-2 md:gap-y-0 md:justify-between items-center">
                <div class="relative w-full">
                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="table-search"
                        class="block pt-2 w-full md:w-auto ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-blue-300 focus:border-gray-900 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-300 dark:focus:border-yellow-300"
                        placeholder="Cari">
                </div>
                
            </div>

        </div>

    </div>
    <div class="col">
        <h2 class="mt-2 text-xl mb-1 font-semibold"> Data Level</h2>
        <hr>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-900 px-10 ">
            <thead class="text-xs text-white uppercase bg-gray-900 h-8">
                <tr align="center">
                    <th class="border border-gray-300 px-2 py-2">No</th>
                    <th class="border border-gray-300 px-2 py-2">ID Level</th>
                    <th class="border border-gray-300 px-2 py-2">Nama Level</th>
                    <th class="border border-gray-300 px-2 py-2">Terakhir Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($level as $u)
                    <tr align="center" class="bg-white border-b text-gray-900">
                        <th class="border border-gray-300 px-2 py-2">{{ $loop->iteration }}</th>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->id }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->nama_level }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection
