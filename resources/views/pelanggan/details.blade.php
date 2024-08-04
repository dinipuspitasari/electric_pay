@extends('layouts.admin')

@section('title', 'Electric Pay | Detail Pelanggan')

@section('content')
    <div class="container mb-10">
    <div class="col">
        <div class="flex justify-between">
            <h2 class="text-3xl"> Detail Pelanggan</h2>
        </div>
    </div>
        </br>
        </br>
        <div class="card">
            <div class="credit-card shadow-lg flex flex-col justify-between">
                <div class="flex justify-end mb-4">
                    <div class="text-lg font-bold">Electric Pay</div>
                </div>
                <div class="card-number text-2xl font-mono tracking-wide">
                    {{  $pelanggan->id_pelanggan }}
                </div>
                <div class="flex justify-between items-center mt-4">
                    <div>
                        <div class="text-sm">NOMOR KWH</div>
                        <div class="text-sm font-mono">{{  $pelanggan->nomor_kwh }}</div>
                        <div class="text-lg font-semibold uppercase">{{ $pelanggan->user->name }}</div>
                    </div>
                    <div>
                        <img src="/assets/img/logo2.png" alt="E-Pay Logo" class="card-logo">
                    </div>
                </div>
            </div>
        
            <div class="card-body mt-5">
                <table class="w-full text-sm text-left rtl:text-right bg-white rounded">
                    <tr>
                        <th scope="col" class="px-6 py-3">Id Pelanggan</th>
                        <td scope="col" class="px-6 py-3">{{  $pelanggan->id_pelanggan }}</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">Nama Pelanggan</th>
                        <td scope="col" class="px-6 py-3">{{  $pelanggan->user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <td scope="col" class="px-6 py-3">{{  $pelanggan->user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">Alamat</th>
                        <td scope="col" class="px-6 py-3">{{   $pelanggan->alamat }}</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">Nomor kWh</th>
                        <td scope="col" class="px-6 py-3">{{  $pelanggan->nomor_kwh }}</td>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3">Daya</th>
                        <td scope="col" class="px-6 py-3">{{   $pelanggan->tarif->daya }} VA</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
