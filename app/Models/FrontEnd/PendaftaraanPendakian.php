<?php

namespace App\Models\FrontEnd;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendaftaraanPendakian extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap','email', 'nomor_telepon', 'jenis_kelamin'];
    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }
}
