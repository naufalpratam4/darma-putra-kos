<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKetemu extends Model
{
    use HasFactory;
    protected $fillable = ['nama_lengkap', 'no_hp', 'keperluan', 'tanggal'];
}
