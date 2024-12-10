<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_portoModel extends Model
{
    use HasFactory;
    protected $table = 'tbl_porto';
    protected $fillable = [
        'deskripsi',
        'judul',
        'umur',
        'tanggal_lahir',
        'city',
        'freelance',
        'deskripsi2',
        'language',
        '<li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>'
    ];
    public $timestamps = false;
}
