<?php

namespace App\Http\Controllers;

use App\Models\SistemKonfigurasi;
use Illuminate\Http\Request;

class SistemKonfigurasiController extends Controller
{
    public function index() {
        // $limit = $request->query('limit', 10);
        // $search = $request->query('search', '');

        $sistem_konfigurasi = SistemKonfigurasi::all();

        return view('sistem_konfigurasi.index', compact('sistem_konfigurasi'));
        
    }


    public function edit($id)
    {
        $sistem_konfigurasi = SistemKonfigurasi::find($id);
    
        return view('sistem_konfigurasi.edit', compact('sistem_konfigurasi'));
    }
    public function update(Request $request, $id)
    {
      
        $sistem_konfigurasi = SistemKonfigurasi::find($id);
      

        $sistem_konfigurasi->update([
            'id'=>$id,
            'value' => $request->value,
            'description'  => $request->description,
        ]);
        return redirect('/sistem-konfigurasi');
    }
}
