<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\SistemKonfigurasi;
use App\Models\Tagihan;
use Barryvdh\DomPDF\Facade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;


class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        $tagihan = Tagihan::whereHas("pelanggan", function($query) {
            $query->where("id_user", Auth::user()->id);
        })->get();

        return view('pembayaran.index', compact('tagihan'));
    }

    public function details($id) {
        $tagihan = Tagihan::find($id);
       
        $pembayaran = Pembayaran::where('tagihan_id', $id)->first();
        
        $biaya_admin = SistemKonfigurasi::getValuebyName('biaya_admin');
        $total_bayar = $tagihan->pelanggan->tarif->tarifperkwh * $tagihan->jumlah_meter + $biaya_admin;;

        return view('pembayaran.detail', compact('tagihan', 'pembayaran', 'biaya_admin', 'total_bayar'));
        
    }

    public function update($id){
        $tagihan = Tagihan::find($id);
        $biaya_admin = SistemKonfigurasi::getValuebyName('biaya_admin');
        $total_bayar = $tagihan->pelanggan->tarif->tarifperkwh * $tagihan->jumlah_meter + $biaya_admin;


        Pembayaran::create([
            'tagihan_id' => $tagihan->id, 
            'pelanggan_id' => $tagihan->pelanggan->id,
            'biaya_admin' => $biaya_admin,
            'total_bayar' => $total_bayar,
            'tanggal_pembayaran' => now(),
        ]);
       
        

        $tagihan->update([
            'status' => 2,
        ]);
        
        return redirect('/pembayaran');
       
    }
    
    public function print($id)
    {

        $pembayaran = Pembayaran::findOrFail($id);
        $tagihan = Tagihan::find($id);

        $pdf = PDF::loadView('pembayaran.print', compact('pembayaran', 'tagihan'))->setPaper('a4', 'landscape');

        // dd($tagihan->pelanggan->user->name);

        return $pdf->stream();
    }
}
