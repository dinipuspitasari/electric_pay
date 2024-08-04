<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tarif;

class TarifController extends Controller
{
    // menampilkan daftar tarif
    public function index()
    {
        $tarif = Tarif::all(); //mengambil semua data tarif dari tarif model
        return view('tarif.index', compact('tarif')); //mengembalikan view dengan data tarif
    }

    //membuat function create untuk membuat tarif baru
    public function create()
    {
        $tarif = Tarif::all(); // Mengambil semua data tarif dari model Tarif (jika diperlukan)
        return view('tarif.create', compact('tarif'));  // Mengembalikan view form pembuatan tarif baru
    }

    //Menyimpan tarif baru ke dalam basis data
    public function store(Request $request)
    {
         // Membuat entri tarif baru di basis data
            $tarif = Tarif::create([
                'daya' => $request->daya, // Mengambil nilai daya dari request
                'tarifperkwh' => $request->tarifperkwh, // Mengambil nilai tarifperkwh dari request
        ]);
        return redirect('/tarif'); // Mengarahkan kembali ke halaman daftar tarif
    }

    public function edit($id)
    {
        $tarif = Tarif::find($id);
        // $tarifs = Tarif::all();
        return view('tarif.edit', compact('tarif'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $tarif = Tarif::find($id);
        // $tarif = Tarif::findOrFail("id_tarif", $id );

        $tarif->update([
            'id'=>$id,
            'daya' => $request->daya,
            'tarifperkwh'  => $request->tarifperkwh,
        ]);
        return redirect('/tarif');
    }

    public function delete(Request $request, $id)
    {
        
        $tarif = Tarif::find($id); 
        // dd($tarif);
        if ($tarif) {
            $tarif->delete(); // Pastikan menggunakan soft delete
        }
        return redirect('/tarif');
        
    }

    public function search(Request $request)
    {
        if ($search = $request->input('search')) {
        $tarif = Tarif::where('daya', 'LIKE', "%{$search}%")
                      ->orWhere('tarifperkwh', 'LIKE', "%{$search}%")
                      ->get();
        } else{
            $tarif = Tarif::all();
        }
        return view('tarif.index', compact('tarif'));
    }
}
