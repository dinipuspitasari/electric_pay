<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SistemKonfigurasi extends Model
{

    protected $table = "sistem_konfigurasi";

    // protected $dates = [
    //     'created_at',
    //     'updated_at',   
    // ];

    protected $fillable = [
        'value',
        'description',
    ];


    public static function getValuebyName($name) {
        $config = SistemKonfigurasi::where('config_name', $name)->first();

        if ($config) {
            return ($config->value);
    }
    
    return null;
    }
}

