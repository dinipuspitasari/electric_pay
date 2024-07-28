<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\User;
use App\Models\Tagihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    //
    public function index()
    {
        $tagihan = Tagihan::all();
        return view('tagihan.index', compact('tagihan'));
    }

    public function create(){
        $pelanggan = Pelanggan::all();

        $currentYear = 2024;
        $yearsCount = 30;
        $tahun = [];
        $month = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        for ($i = 0; $i < $yearsCount; $i++) {
            $tahun[] = $currentYear - $i;
        }


        return view('tagihan.create', compact('pelanggan','tahun','month'));
    }

    public function store(Request $request){
        // dd($request);
        $data = $request;
        $data['jumlah_meter'] = $data['meter_akhir'] - $data['meter_awal'];
        $tagihan = [
            'id_pelanggan' => $data['id_pelanggan'],
            'bulan' => $data['bulan'],
            'tahun' => $data['tahun'],
            'meter_awal' => $data['meter_awal'],
            'meter_akhir' => $data['meter_akhir'],
            'jumlah_meter' => $data['jumlah_meter'],
        ];
        Tagihan::create($tagihan);
        return redirect('tagihan');
    }

    public function edit($id)
    {
        $tagihan = Tagihan::find($id);
        $pelanggan = Pelanggan::all();

        $currentYear = 2024;
        $yearsCount = 30;
        $tahun = [];
        $month = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        for ($i = 0; $i < $yearsCount; $i++) {
            $tahun[] = $currentYear - $i;
        }


        return view('tagihan.edit', compact('pelanggan','tahun','month','tagihan'));  
    }

    public function update(Request $request, $id)
    {
        $tagihan = Tagihan::find($id);
        $data = $request;
        $data['jumlah_meter'] = $data['meter_akhir'] - $data['meter_awal'];
        $tagihan->update([
            'id_pelanggan' => $tagihan->id_pelanggan,
            'bulan' => $data['bulan'],
            'tahun' => $data['tahun'],
            'meter_awal' => $data['meter_awal'],
            'meter_akhir' => $data['meter_akhir'],
            'jumlah_meter' => $data['jumlah_meter'],
        ]);
        return redirect('tagihan');
    }
}