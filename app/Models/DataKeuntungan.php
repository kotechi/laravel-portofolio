<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKeuntungan extends Model
{
    use HasFactory;
    protected $table = 'data_keuntungan';
    protected $fillable = [
        'pembeli',
        'keuntungan',
        'tanggal',
    ];
}
