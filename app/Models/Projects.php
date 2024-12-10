<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    protected $table = 'projects';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'name',
        'description',
        'link',
        'date',
        'image'
    ];
    public function getRouteKeyName()
    {
        return 'id'; // atau column lain yang digunakan sebagai identifier
    }
}
