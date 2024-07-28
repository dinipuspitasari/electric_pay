@extends('layouts.admin')

@section('title', 'Listrik Praktis | Tagihan')

@section('content')

    {{--  Content --}}
    <div class="">
        <div class="">
            <h2 class="text-3xl"> Tambah Tagihan</h2>
            <hr>
        </div>
        <div class="mb-10">
            <div class="mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="/tagihan/create" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto ">
                            @csrf

                            <div class="form-group row mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <div class="col-sm-10">
                                    <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="id_pelanggan" 
                                    name="id_pelanggan"
                                    placeholder="Masukkan Nama">
                                        <option>Masukkan Nama</option>
                                        @foreach ($pelanggan as $pelanggan)
                                            <option value='{{$pelanggan->id}}'>{{$pelanggan->user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="bulan" class="block mb-2 text-sm font-medium text-gray-900">Bulan</label>
                                <div class="col-sm-10">
                                    <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="bulan" 
                                    name="bulan"
                                    placeholder="Masukkan Bulan">
                                        <option>Pilih Bulan</option>
                                        @foreach ($month as $index => $month)
                                        <option value="{{ $index + 1 }}">{{ $month }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                                <div class="col-sm-10">
                                    <select class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="tahun" 
                                    name="tahun"
                                    placeholder="Masukkan Tahun">
                                        <option>Pilih Tahun</option>
                                        @foreach ($tahun as $tahun)
                                        <option value="{{ $tahun}}">{{ $tahun }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="meter_awal" class="block mb-2 text-sm font-medium text-gray-900">Meter Awal</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="meter_awal" placeholder="Masukkan Meter Awal">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="meter_akhir" class="block mb-2 text-sm font-medium text-gray-900">Meter Akhir</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-yellow-300 focus:border-yellow-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="meter_akhir" placeholder="Masukkan Meter Akhir">
                                </div>
                            </div>

                            <button type="submit"
                                class="text-white bg-yellow-300 hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection