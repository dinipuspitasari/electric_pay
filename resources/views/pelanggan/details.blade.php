@extends('layouts.admin')

@section('title', 'Electric Pay | Detail Pelanggan')

@section('content')
    <div class="container">
    <div class="col">
        <div class="flex justify-between">
            <h2 class="text-3xl"> Edit Pelanggan</h2>

            <a type="button"
                            class="flex items-center justify-center text-white w-full md:w-48 bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-1 py-2 sm:mb-0 rounded-full"
                            href={{ url('/pelanggan') }}>
                            Kembali</a>
            <hr>
        </div>
    </div>
        </br>
        </br>
        <div class="card">
            <div class="credit-card shadow-lg flex flex-col justify-between">
                <div class="flex justify-between items-center mb-4">
                    <div class="chip bg-yellow-500 rounded h-12 w-16"></div>
                    <div class="text-lg font-bold">Electric Pay</div>
                </div>
                <div class="card-number text-2xl font-mono tracking-wide">
                    4895 2456 1580 8975
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <div class="text-sm">MONTH/YEAR</div>
                        <div class="text-lg font-bold">01/35</div>
                        <div class="text-lg">robot</div>
                    </div>
                    <div>
                        <img src="https://via.placeholder.com/80x50.png" alt="E-Pay Logo" class="card-logo">
                    </div>
                </div>
            </div>
        
            <div class="card-body">
                <p>Id Pelanggan = {{  $pelanggan->id_pelanggan }}</p>
                <p>Nama Pelanggan = {{ $pelanggan->user->name }} </p>
                <p>Email =  {{  $pelanggan->user->email }}</p>
                <p>Alamat =  {{  $pelanggan->alamat }}</p>
                <p>Nomor KWh =  {{  $pelanggan->nomor_kwh }}</p>
                <p>daya =  {{  $pelanggan->tarif->daya }} VA</p>
            </div>
        </div>
    </div>
@endsection
