<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamera extends Model
{

    use HasFactory;
    protected $table = 'tabel_kamera';
    protected $fillable = [
        'id_kamera',
        'nama_kamera',
        'keterangan',
        'harga_sewa',
        'stok_kamera',
        'type_kamera',
        'image_kamera',

    ];
}
