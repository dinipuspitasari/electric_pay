<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';

    protected $fillable = [
            'tagihan_id',
            'pelanggan_id',
            'biaya_admin',
            'tanggal_pembayaran' ,
            'total_bayar' ,
    ];

}
