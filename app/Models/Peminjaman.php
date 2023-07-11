<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table ='tabel_peminjaman';
    protected $fillable = [
        'id_pinjam',
        'total_harga',
        'bukti_bayar',
        'status',



    ];
}
