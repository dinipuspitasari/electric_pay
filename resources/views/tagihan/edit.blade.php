@extends('layouts.admin')

@section('title', 'electric Pay | Tagihan')

@section('content')

    {{--  Content --}}
    <div class="">
        <div class="">
            <h2 class="text-3xl"> Edit Tagihan</h2>
            <hr>
        </div>
        <div class="mb-10">
            <div class="mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/tagihan/update/'.$tagihan->id)}}" method="POST" enctype="multipart/form-data" class="w-4/5 ">
                            @csrf

                            <div class="form-group row mb-5">
                                <label for="name" class="col-md-2 col-form-label"
                                    >Nama</label
                                >
                                <div class="col-sm-20">
                                    <select
                                    disabled
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus:ring-blue-300 focus:border-gray-700 block w-full p-2.5 mt-2"
                                        id="id_pelanggan"
                                        name="id_pelanggan"
                                        value="{{ $tagihan->pelanggan->id }}"
                                        placeholder="Masukan Nama"
                                    >
                                        @foreach ($pelanggan as $pelanggan)
                                        <option value="{{$pelanggan->id}}">
                                            {{ $pelanggan->id_pelanggan }}
                                            {{ $pelanggan->user->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="form-group row mb-5">
                            <label for="bulan" class="col-md-2 col-form-label"
                                >Bulan</label
                            >
                            <div class="col-sm-20">
                                <select
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus:ring-blue-300 focus:border-gray-700 block w-full p-2.5 mt-2"
                                    id="bulan"
                                    name="bulan"
                                    placeholder="Masukan Bulan"
                                >
                                @foreach ($month as $index => $monthName)
                                <option value="{{ $index + 1 }}" {{ ($index + 1) == $tagihan->bulan ? 'selected' : '' }}>
                                    {{ $monthName }}
                                </option>
                            @endforeach
                                </select>
                            </div>
                        </div>

                            <div class="form-group row mb-5">
                                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                                <div class="col-sm-10">
                                    <select
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="tahun" name="tahun" value="{{ $tagihan }}" placeholder="Masukkan Tahun">
                                        @foreach ($tahun as $year)
                                        <option value="{{ $year }}" {{ $year == $tagihan->tahun ? 'selected' : '' }}>
                                            {{ $year }}
                                        </option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="meter_awal" class="block mb-2 text-sm font-medium text-gray-900">Meter
                                    Awal</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="meter_awal" value="{{ $tagihan->meter_awal }}" placeholder="Masukkan Meter Awal">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="meter_akhir" class="block mb-2 text-sm font-medium text-gray-900">Meter
                                    Akhir</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-700 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="meter_akhir" value="{{ $tagihan->meter_akhir }}" placeholder="Masukkan Meter Akhir">
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