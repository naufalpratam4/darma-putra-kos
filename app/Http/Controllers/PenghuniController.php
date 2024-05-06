<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\penghuni;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PenghuniController extends Controller
{
    public function penghuni()
    {
        $kamar = kamar::all();
        return view('admin.addUser', compact('kamar'));
    }
    public function addPenghuni(Request $request)
    {
        $request->validate([
            // 'tgl_masuk' => 'required|date_format:d/m/Y',
            // 'tgl_keluar' => 'required|date_format:d/m/Y',
        ]);

        $tgl_masuk = Carbon::createFromFormat('d/m/Y', $request->input('tgl_masuk'))->format('Y-m-d');
        $tgl_keluar = Carbon::createFromFormat('d/m/Y', $request->input('tgl_keluar'))->format('Y-m-d');

        $data = new Penghuni([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'tgl_masuk' => $tgl_masuk,
            'tgl_keluar' => $tgl_keluar,
            'kamar' => $request->input('kamar'),
            'pembayaran' => $request->input('pembayaran'),
        ]);



        $data->save();
        return redirect('/penghuni');
    }
    public function viewEditPenghuni($id)
    {
        $penghuni = penghuni::find($id);
        $kamar = kamar::all();
        return view('admin.editPenghuni', compact('penghuni', 'kamar'));
    }
    public function editPenghuni(Request $request, $id)
    {
        $penghuni = penghuni::find($id);
        $tgl_masuk = Carbon::createFromFormat('d/m/Y', $request->input('tgl_masuk'))->format('Y-m-d');
        $tgl_keluar = Carbon::createFromFormat('d/m/Y', $request->input('tgl_keluar'))->format('Y-m-d');
        $penghuni->update([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'tgl_masuk' => $tgl_masuk,
            'tgl_keluar' => $tgl_keluar,
            'kamar' => $request->input('kamar'),
            'pembayaran' => $request->input('pembayaran'),

        ]);
        return redirect('/penghuni');
    }

    public function deletePenghuni($id)
    {
        $data = penghuni::find($id);
        if ($data) {
            $data->delete();
        }
    }
}
