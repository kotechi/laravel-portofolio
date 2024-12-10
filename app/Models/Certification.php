<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $table = 'certifications';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'issued_by',
        'issued_at',
        'description',
        'file',
        'date',
        'image'
    ];

    // Jika menggunakan dates
    public function getRouteKeyName()
    {
        return 'id'; // atau column lain yang digunakan sebagai identifier
    }
}
