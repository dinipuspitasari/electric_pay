@extends('layouts.admin') @section('title', 'EcoBill | Tarif')
@section('content')

<!-- Content -->
<div class="container">
    <div class="col">
        <h2 class="text-3xl">Tambah Tarif</h2>
        <hr />
    </div>
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <form
                        action="/tarif/create"
                        method="POST"
                        enctype="multipart/form-data"
                        class="w-4/5"
                    >
                        @csrf

                        <div class="form-group row mb-5">
                            <label
                                for="daya"
                                class="block mb-2 text-sm font-medium text-gray-900"
                                >Daya</label
                            >
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus:ring-gray-900 focus:border-blue-200 block w-full p-2.5 mt-2"
                                    name="daya"
                                    placeholder="Masukkan Daya"
                                />
                            </div>
                        </div>

                        <div class="form-group row mb-5">
                            <label
                                for="tarifperkwh"
                                class="col-md-2 col-form-label"
                                >Tarif PerKwh</label
                            >
                            <div class="col-sm-10">
                                <input
                                    type="text"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus:ring-gray-900 focus:border-blue-200 block w-full p-2.5 mt-2"
                                    name="tarifperkwh"
                                    placeholder="Masukkan Tarif"
                                />
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="text-white bg-gray-900 hover:bg-gray-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        >
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection