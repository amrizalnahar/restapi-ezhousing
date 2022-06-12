<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanah extends Model
{
    use HasFactory;

    protected $table = 'tanah';
    protected $fillable = [
        'panjang_tanah',
        'lebar_tanah',
        'harga_tanah',
        'gambar_tanah'
    ];
}
