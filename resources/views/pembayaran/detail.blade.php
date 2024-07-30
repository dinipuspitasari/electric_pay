@extends('layouts.admin')

@section('title', 'Electric Pay | Detail Pembayaran')

@section('content')
    <div class="container mb-10">
    <div class="col">
        <div class="flex justify-between w-full mb-5">
            <h2 class="text-3xl">Detail Pembayaran</h2>

            <a type="button"
                            class="flex items-center justify-center text-white w-full md:w-48 bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-1 py-2 sm:mb-0 rounded-full"
                            href={{ url('/pembayaran') }}>
                            Kembali</a>
        </div>
    </div>
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="text-xl font-bold">{{$tagihan->pelanggan->user->name }} | {{$tagihan->pelanggan->tarif->daya }}VA</h2>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <p class="text-gray-600">ID Pelanggan</p>
                <p class="font-medium">{{$tagihan->pelanggan->id_pelanggan }}</p>
            </div>
            <div>
                <p class="text-gray-600">Nomor kWh</p>
                <p class="font-medium">{{$tagihan->pelanggan->nomor_kwh }}</p>
            </div>
            <div>
                <p class="text-gray-600">Meter Awal</p>
                <p class="font-medium">{{$tagihan->meter_awal}} kWh</p>
            </div>
            <div>
                <p class="text-gray-600">Meter Akhir</p>
                <p class="font-medium">{{$tagihan->meter_akhir}} kWh</p>
            </div>
            <div>
                <p class="text-gray-600">Periode</p>
                <p class="font-medium">{{ getMonthNames($tagihan->bulan) }} {{ $tagihan->tahun }}</p>
            </div>
            <div>
                <p class="text-gray-600">Status</p>
                <p class="font-medium text-green-600">
                    @if ($tagihan->status == 1)
                            <div class="bg-red-200 p-1 rounded-full text-red-600 sm:w-52 text-center">Menunggu Pembayaran</div>
                            @elseif ($tagihan->status == 2)
                            <div class="bg-green-200 p-1 rounded-full text-green-600 sm:w-28 text-center">Sudah Bayar</div>
                            @endif
                </p>
            </div>
        </div>
        
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <p class="text-gray-600">Tarif / kWh</p>
                    <p class="font-medium">Rp {{number_format($tagihan->pelanggan->tarif->tarifperkwh) }}/ kWh</p>
                </div>
                <div>
                    <p class="text-gray-600">Jumlah Meter</p>
                    <p class="font-medium">{{$tagihan->jumlah_meter}} kWh</p>
                </div>
                <div>
                    <p class="text-gray-600">Biaya Admin</p>
                    <p class="font-medium">Rp. {{ number_format($pembayaran->biaya_admin)}}</p>
                </div>
                <div>
                    <p class="text-gray-600">Total Bayar</p>
                    <p class="font-medium text-orange-600">Rp. {{ number_format($pembayaran->total_bayar)}}</p>
                </div>
            </div>
            <div>
               
            @if ($tagihan->status==1)
            <button type="button" data-modal-target="paymentModal" data-modal-toggle="paymentModal" class="mt-5 text-white hover:bg-gray-700 bg-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2 w-32">Bayar</button>

            {{-- popup pembayaran bca --}}
            <div id="paymentModal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="paymentModal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm4.707-10.707a1 1 0 00-1.414-1.414L10 8.586 7.707 6.293a1 1 0 00-1.414 1.414L8.586 10l-2.293 2.293a1 1 0 101.414 1.414L10 11.414l2.293 2.293a1 1 0 001.414-1.414L11.414 10l2.293-2.293z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div class="p-6 text-center">
                            <img src="/assets/img/bca.png" alt="logo bca" class="w-24">
                            <h3 class="mb-5 text-sm font-normal text-gray-500 dark:text-gray-400">No. Rekening :</h3>
                            <h3 class="mb-5 text-lg font-semibold text-blue-900 dark:text-gray-400">1220 89415 2455 524547</h3>
                            <hr>
                            <br>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda yakin ingin melakukan pembayaran?</h3>
                            <form id="bayarForm" action="{{ url('/pembayaran/update/'.$tagihan->id)}}" method="POST">
                                @csrf
                                <button type="submit" class="text-white bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                    Bayar
                                </button>
                            </form>
                            <button data-modal-hide="paymentModal" type="button" class="mt-2 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Batal</button>
                        </div>
                    </div>
                </div>
            </div>
                @else 
                <div class="mt-3 flex justify-between w-4/5">
                {{-- <p>$yourDateTime->format('d-m-Y H:i')</p> --}}
                <div>
                <p class="text-gray-600 font-medium">Dibayar Pada : {{date('d-m-Y H:i', strtotime($pembayaran->tanggal_pembayaran));}}</p>
                </div>
                <div>
                <a href={{ url('/pembayaran/print/' . $pembayaran->id) }} type="button"
                    class= "text-white hover:bg-gray-700 bg-gray-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm p-2">
                    Cetak Struk
                </a>
                </div>
            </div>
            @endif
            </div>
        </div>
            
    </div>
@endsection
