<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\SistemKonfigurasi;
use App\Models\Tagihan;
use Barryvdh\DomPDF\Facade ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \PDF;


class PembayaranController extends Controller
{
    public function index() 
    {
        
        // $pembayaran = Pembayaran::all();
        $tagihan = Tagihan::whereHas("pelanggan", function($query) {
        $query->where("id_user", Auth::user()->id);
        })->get();

        // dd($tagihan);
        return view('pembayaran.index', compact('tagihan'));
    }

    public function details($id) {
        $tagihan = Tagihan::find($id);
        $pembayaran = Pembayaran::where('tagihan_id', $id)->first();
        
        $sistem_konfigurasi = SistemKonfigurasi::getValuebyName('biaya_admin');
        $total_bayar = $tagihan->pelanggan->tarif->tarifperkwh * $tagihan->jumlah_meter + $sistem_konfigurasi;

        return view('pembayaran.detail', compact('tagihan', 'pembayaran', 'sistem_konfigurasi', 'total_bayar'));
    }
    

    public function update(Request $request, $id) {
        $tagihan = Tagihan::find($id);
        $biaya_admin = SistemKonfigurasi::getValuebyName('biaya_admin');
        $total_bayar = $tagihan->pelanggan->tarif->tarifperkwh * $tagihan->jumlah_meter + $biaya_admin;

        Pembayaran::create([
            'tagihan_id'=> $tagihan->id,
            'pelanggan_id' => $tagihan->pelanggan->id,
            'biaya_admin' => $biaya_admin,
            'tanggal_pembayaran' => now(),
            'total_bayar' => $total_bayar,
        ]);
        $tagihan->update([
            'status' => 2,
        ]);
        return redirect('/pembayaran');
    }

    // public function alert($id)
    // {
    //     $pembayaran = Pembayaran::find($id);
    //     return view('/pembayaran/alert', compact('pembayaran'));
    // }
    
    public function print($id)
    {

        $pembayaran = Pembayaran::findOrFail($id);
        $tagihan = Tagihan::find($id);

        $pdf = PDF::loadView('pembayaran.print', compact('pembayaran', 'tagihan'));

        // dd($tagihan->pelanggan->user->name);

        return $pdf->stream();
    }
}
