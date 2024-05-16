<?php

namespace App\Http\Controllers;

use App\Models\JadwalKetemu;
use Illuminate\Http\Request;

class JadwalKetemuController extends Controller
{
    public function jadwalKetemu(Request $request)
    {
        $data = new JadwalKetemu([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'no_hp' => $request->input('no_hp'),
            'keperluan' => $request->input('keperluan'),
            'tanggal' => $request->input('tanggal')
        ]);
        $data->save();
        return redirect('/jadwal-temu')->with('success', 'Pesan berhasil terkirim');
    }
    public function deleteJadwalKetemu($id)
    {
        $data = JadwalKetemu::find($id);
        if (!$data) {
            return response()->json('error');
        }
        $data->delete();
        return redirect('jadwal-temu-admin');
    }
}
