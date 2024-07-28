<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tarif;

class TarifController extends Controller
{
    public function index()
    {
        $tarif = Tarif::all();
        return view('tarif.index', compact('tarif'));
        // return view('tarif.index');
    }

    public function create()
    {
        $tarif = Tarif::all();
        return view('tarif.create', compact('tarif'));
    }

    public function store(Request $request)
    {
            $tarif = Tarif::create([
                'daya' => $request->daya,
                'tarifperkwh' => $request->tarifperkwh,
        ]);
        return redirect('/tarif');
    }

    // public function update(Request $request, $id)
    // {
    //     $tarif = Tarif::find($id);
    //     $tarif->update($request->all());
    //     return redirect('/tarif');
    // }

    // public function edit($id)
    // {

    //     $tarif = Tarif::find($id);
    //     // dd($data);
    //     return view('tarif.edit', ['tarif' => $tarif]);
    // }

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
        $tarif->delete();
        return redirect('/tarif');
        
    }

    // public function destroy(Request $request)
    // {
    //     $tarif = Tarif::where("id_tarif", $request->input('id') )->first();
    //     $tarif->delete();
    //     return redirect('/tarif');
    //     // dd($id);
    // }
}
