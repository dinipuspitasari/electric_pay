<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $getTotalPelanggan = User::where('id_level', 2)->get()->count();
        $getTotalAdmin = User::where('id_level', 1)->get()->count();
        $getTotalTagihanBelumBayar = Tagihan::where('status', 1)->get()->count();
        $getTotalTagihanSudahBayar = Tagihan::where('status', 2)->get()->count();

        return view('dashboard', compact('getTotalAdmin','getTotalPelanggan', 'getTotalTagihanBelumBayar','getTotalTagihanSudahBayar'));
    }
    
}
