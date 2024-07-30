@extends('layouts.admin')

@section('title', 'Electric Pay | Pelanggan')

@section('content')

    {{--  Content --}}
    <div class="flex items-center justify-between p-6 bg-white card mb-6">
            <!-- Header -->
                <div>
                    <h1 class="text-2xl font-bold">Hai, {{ Auth::user()->name }}</h1>
                    <p class="text-gray-500">Semoga harimu menyenangkan dan jangan lupa menjaga kesehatan!</p>
                </div>
                <div>
                    <img src="/assets/img/11.png" alt="Doctor Image" class="w-44">
                </div>
            </div>
    
            <!-- Main Content -->
            @if (Auth::user()->id_level == 1)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="p-6 bg-white card justify-center" id="info-card">
                    <h2 class="text-xl font-semibold item"><svg class="w-20 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                      </svg> 
                      Total Admin</h2>
                    <p class="text-2xl font-bold text-red-500">{{$getTotalAdmin}}</p>
                </div>
                <div class="p-6 bg-white card justify-center" id="info-card">
                    <h2 class="text-xl font-semibold item"><svg class="w-20 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                      </svg> 
                      Total Pelanggan</h2>
                    <p class="text-2xl font-bold text-red-500">{{$getTotalPelanggan}}</p>
                </div>
                <div class="p-6 bg-white card" id="info-card">
                    <h2 class="text-xl font-semibold"><svg xmlns="http://www.w3.org/2000/svg"class="w-20" viewBox="0 0 24 24"><path fill="black" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1s-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2M7 8h2v4H8V9H7zm3 9v1H7v-.92L9 15H7v-1h2.25c.41 0 .75.34.75.75c0 .2-.08.39-.21.52L8.12 17zm1-13c0-.55.45-1 1-1s1 .45 1 1s-.45 1-1 1s-1-.45-1-1m6 13h-5v-2h5zm0-6h-5V9h5z"/></svg>
                        Tagihan Belum Dibayar</h2>
                    <p class="text-2xl font-bold text-blue-500">{{$getTotalTagihanBelumBayar}}</p>
                </div>
                <div class="p-6 bg-white card" id="info-card">
                    <h2 class="text-xl font-semibold"><svg xmlns="http://www.w3.org/2000/svg" class="w-20" viewBox="0 0 640 512"><path fill="black" d="M352 288h-16v-88c0-4.42-3.58-8-8-8h-13.58c-4.74 0-9.37 1.4-13.31 4.03l-15.33 10.22a7.994 7.994 0 0 0-2.22 11.09l8.88 13.31a7.994 7.994 0 0 0 11.09 2.22l.47-.31V288h-16c-4.42 0-8 3.58-8 8v16c0 4.42 3.58 8 8 8h64c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8M608 64H32C14.33 64 0 78.33 0 96v320c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V96c0-17.67-14.33-32-32-32M48 400v-64c35.35 0 64 28.65 64 64zm0-224v-64h64c0 35.35-28.65 64-64 64m272 192c-53.02 0-96-50.15-96-112c0-61.86 42.98-112 96-112s96 50.14 96 112c0 61.87-43 112-96 112m272 32h-64c0-35.35 28.65-64 64-64zm0-224c-35.35 0-64-28.65-64-64h64z"/></svg>
                        Tagihan Sudah Dibayar</h2>
                    <p class="text-2xl font-bold text-purple-500">{{$getTotalTagihanSudahBayar}}</p>
                </div>
            </div>
            @endif
@endsection