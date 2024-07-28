<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'id_user',
        'name',
        'email',
        'nomor_telepon',
        'alamat',
        'id_tarif',
        'id_pelanggan',
        'password',
        'nomor_kwh',
    ];

    public function tarif() 
    {
        return $this->belongsTo(Tarif::class, 'id_tarif', 'id');
    }

    public function user() 
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    protected $guarded = [];
}