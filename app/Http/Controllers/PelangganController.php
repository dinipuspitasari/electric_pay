<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Hash;
use App\Models\Tarif;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = Pelanggan::all();
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function details($id){
        $pelanggan = Pelanggan::find($id);
        $user = User::find($id);
        $tarifs = Tarif::find($id);
        return view('pelanggan.details', compact('pelanggan', 'tarifs', 'user'));
    }

    public function create()
    {
        $pelanggan = Pelanggan::all();
        $tarifs = Tarif::all();
        return view('pelanggan.create', compact('pelanggan', 'tarifs'));
    }

    public function store(Request $request)
    {
            $data = $request;
            $user = User::create([
                'id_level' => 2,
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make('user123'),
            ]);

            $data['id_user'] = $user->id;

            $data['id_pelanggan'] = date('ymdHis');
            $data['nomor_kwh'] = date('Hisymd');

            $pelanggan = [
                'id_tarif' =>$data['id_tarif'],
                'id_user' =>$data['id_user'],
                'id_pelanggan' =>$data['id_pelanggan'], 
                'alamat' =>$data['alamat'],
                'nomor_kwh' =>$data['nomor_kwh'],
                'nomor_telepon' =>$data['nomor_telepon'],
            ];
    //  dd($pelanggan);
            Pelanggan::create($pelanggan);
        return redirect('/pelanggan');
    }

    public function edit($id)
    {
        $pelanggan = Pelanggan::find($id);
        $tarifs = Tarif::all();
        return view('pelanggan.edit', compact('pelanggan', 'tarifs'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $pelanggan = Pelanggan::find($id);
       $pelanggan -> update($request->all());

        $pelanggan->update([
            'id_tarif'=>$request->id_tarif,
            'daya' => $request->daya,
            'tarifperkwh'  => $request->tarifperkwh,
        ]);
        return redirect('/pelanggan');
    }

    public function delete(Request $request, $id)
    {

        $pelanggan = Pelanggan::find($id); 
        // dd($tarif);
        $pelanggan->delete();
        return redirect('/pelanggan');

    }
}