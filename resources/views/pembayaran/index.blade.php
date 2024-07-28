@extends('layouts.admin')

@section('title', 'Electric Pay | Pelanggan')

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
                        class="block pt-2 w-full md:w-auto ps-10 text-sm text-gray-900 border border-gray-300 rounded-full bg-white focus:ring-yellow-300 focus:border-yellow-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-yellow-300 dark:focus:border-yellow-300"
                        placeholder="Cari">
                </div>
                <a type="button"
                    class="flex items-center justify-center text-white w-full md:w-48 bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 font-medium text-sm px-1 py-2 sm:mb-0 rounded-full"
                    href={{ url('/pelanggan/create') }}>
                    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h14m-7 7V5" />
                    </svg>
                    Tambah Pelanggan</a>
            </div>

        </div>

    </div>
    <div class="col">
        <h2 class="mt-2 text-xl mb-1 font-semibold"> Data Pelanggan</h2>
        <hr>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-900 px-10 ">
            <thead class="text-xs text-white uppercase bg-gray-900 h-8">
                <tr align="center">
                    <th class="border border-gray-300 px-2 py-2">No</th>
                    <th class="border border-gray-300 px-2 py-2">ID Pelanggan</th>
                    <th class="border border-gray-300 px-2 py-2"></th>
                    <th class="border border-gray-300 px-2 py-2">Email</th>
                    <th class="border border-gray-300 px-2 py-2">Alamat</th>
                    <th class="border border-gray-300 px-2 py-2">Nomor KWH</th>
                    <th class="border border-gray-300 px-2 py-2">Daya</th>
                    <th class="border border-gray-300 px-2 py-2">Tanggal dibuat</th>
                    <th class="border border-gray-300 px-2 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pelanggan as $u)
                    <tr align="center" class="bg-white border-b text-gray-900">
                        <th class="border border-gray-300 px-2 py-2">{{ $loop->iteration }}</th>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->id_pelanggan }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->user->name }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->user->email }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->alamat }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->nomor_kwh }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->tarif->daya }}</td>
                        <td class="border border-gray-300 px-2 py-2">{{ $u->updated_at }}</td>
                        <td class="flex items-center justify-center py-2 px-2">
                            <a href={{ url('/pelanggan/edit/' . $u->id) }} type="button"
                                class="text-white hover:bg-blue-200   00 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1">
                                <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                </svg>
                            </a>
                            <a href={{ url('/pelanggan/details/' . $u->id) }} type="button"
                                class="text-white hover:bg-blue-200   00 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-1 py-1">
                                <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                </svg>
                            </a>
                            <a href={{ url('/pelanggan/delete/' . $u->id) }}
                                onclick="return confirm('Anda Yakin ingin Menghapus {{ $u->daya }} ?')" type="button"
                                class="ms-2 text-white hover:bg-red-200 focus:ring-4 focus:ring-red-400 font-medium rounded-lg text-sm px-1 py-1">
                                <svg class="w-5 h-5 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                                </svg>
                            </a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
@endsection