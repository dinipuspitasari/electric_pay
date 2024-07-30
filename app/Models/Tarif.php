<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tarif extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'tarif';
    protected $fillable = [
        'id',
        'daya',
        'tarifperkwh',
    ];

    protected $dates = ['deleted_at'];
    protected $guarded = [];
}
