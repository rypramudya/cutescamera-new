<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPengguna extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nik',
        'nohp',
        'alamat',
        'jenisid',
        'fotobersamaid',
        'fotoid',
        'jenisid'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
