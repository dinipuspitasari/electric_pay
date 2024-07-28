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
}
