@extends('layouts.admin')

@section('title', 'Listrik Praktis | User')

@section('content')
    {{--  Content --}}
    <div class="container">
        <div class="col">
            <h2 class="text-3xl"> Tambah Admin</h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card ">
                    <div class="card-body ">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data"
                            class="w-4/5">
                            @csrf

                            <div class="form-group row mb-5 ">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="name" placeholder="Masukkan Nama">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <label for="email" class="col-md-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text"
                                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-300 focus:border-gray-900 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        name="email" placeholder="Masukkan Email">
                                </div>
                            </div>

                            <button type="submit"
                                class="text-white bg-gray-900 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection