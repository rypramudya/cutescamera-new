<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'tabel_peminjaman';
    protected $fillable = [
        'id_pinjam',
        'kamera_id',
        'user_id',
        'mulai_sewa',
        'selesai_sewa',
        'total_harga',
        'bukti_bayar',
        'status',
    ];

    public function penyewa(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function barang_sewa(): HasOne
    {
        return $this->hasOne(Kamera::class, 'id_kamera', 'kamera_id');
    }
}