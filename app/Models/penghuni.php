<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'email', 'alamat', 'no_hp', 'tgl_masuk', 'tgl_keluar', 'kamar', 'pembayaran'];

    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
}
