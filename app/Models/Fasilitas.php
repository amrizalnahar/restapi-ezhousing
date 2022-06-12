<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $fillable = [
        'jml_km',
        'jml_ktdr',
        'luas_bangunan',
        'gambar_fasilitas'
    ];
}
