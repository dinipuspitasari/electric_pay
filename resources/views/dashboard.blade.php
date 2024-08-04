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
                <div class="p-6 bg-white card " id="info-card">
                    <h2 class="text-xl font-semibold item"><svg class="w-20 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                      </svg> 
                      Total Admin</h2>
                    <p class="text-2xl font-bold text-red-500">{{$getTotalAdmin}}</p>
                </div>
                <div class="p-6 bg-white card justify-center" id="info-card">
                    <h2 class="text-xl font-semibold item"><svg class="w-20 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"  fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
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
                    <h2 class="text-xl font-semibold"><svg class="w-20 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z" clip-rule="evenodd"/>
                        <path fill-rule="evenodd" d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z" clip-rule="evenodd"/>
                      </svg>
                      
                        Tagihan Sudah Dibayar</h2>
                    <p class="text-2xl font-bold text-purple-500">{{$getTotalTagihanSudahBayar}}</p>
                </div>
            </div>
            @endif
@endsection