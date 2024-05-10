<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penghuni extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'tgl_masuk', 'tgl_keluar', 'kamar_id', 'pembayaran', 'bukti_pembayaran'];
    protected $table = 'penghunis';
    public function kamar()
    {
        return $this->belongsTo(kamar::class);
    }
    public function calonPenghuni()
    {
        return $this->belongsTo(calon_penghuni::class, 'nama_lengkap');
    }
}
