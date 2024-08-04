@extends('layouts.admin')

@section('title', 'Electric Pay | Sistem Konfigurasi')

@section('content')

    {{--  Content --}}
    <div class="">
        <div class="">
            <h2 class="text-3xl"> Edit Sistem Konfigurasi</h2>
            <hr>
        </div>
        <div class="mb-10">
            <div class="mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/sistem-konfigurasi/update/'.$sistem_konfigurasi->id)}}" method="POST" enctype="multipart/form-data" class="w-4/5 ">
                            @csrf

                            <div class="form-group row mb-5">
                                <label for="meter_awal" class="block mb-2 text-sm font-medium text-gray-900">Nilai</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-blue-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="value" value="{{ $sistem_konfigurasi->value }}" placeholder="Masukkan Biaya Admin">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="meter_akhir" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-gray-900 focus:border-blue-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="description" value="{{ $sistem_konfigurasi->description }}" placeholder="Masukkan Deskripsi">
                                </div>
                            </div>

                            <button type="submit"
                                class="text-white bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection