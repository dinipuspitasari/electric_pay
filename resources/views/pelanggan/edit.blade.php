@extends('layouts.admin')

@section('title', 'Electric Pay | Pelanggan')

@section('content')

    {{--  Content --}}
    <div class="">
        <div class="">
            <h2 class="text-3xl"> Edit Pelanggan</h2>
            <hr>
        </div>
        <div class="mb-10">
            <div class="mt-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ url('/pelanggan/update/' . $pelanggan->id) }}" method="POST"
                            enctype="multipart/form-data" class="w-4/5 ">
                            @csrf

                            <div class="form-group row mb-5">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="name" placeholder="Masukkan Nama"
                                        value="{{ $pelanggan->user->name }}">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg ffocus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="email" placeholder="Masukkan Email" value="{{ $pelanggan->user->email }}">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="nomor_telepon" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Pelanggan</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="nomor_telepon" placeholder="Masukkan Nomor Telepon"
                                        value="{{ $pelanggan->nomor_telepon }}">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="id_tarif" class="block mb-2 text-sm font-medium text-gray-900">Daya</label>
                                <div class="col-sm-10">
                                    <select
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="id_tarif" name="id_tarif" placeholder="masukkan daya">
                                        <option>Pilih Daya</option>
                                        @foreach ($tarifs as $tarif)
                                            <option value={{ $tarif->id }}>{{ $tarif->daya }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="alamat" placeholder="Masukkan Alamat" value="{{ $pelanggan->alamat }}">
                                </div>
                            </div>

                            <button type="submit"
                                class="text-white bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection