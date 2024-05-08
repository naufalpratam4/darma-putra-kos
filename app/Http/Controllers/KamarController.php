<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function addKamar(Request $request)
    {
        $data = new kamar([
            'nomor_kamar' => $request->input('nomor_kamar'),
            'luas_kamar' => $request->input('luas_kamar'),
            'harga_Sewa' => $request->input('harga_Sewa'),
            'fasilitas' => $request->input('fasilitas'),
            'status' => $request->input('status'),
        ]);
        $data->save();

        return redirect('/kamar');
    }
    public function editKamar($id)
    {
        $kamar = Kamar::find($id);
        return view('admin.EditKamar', compact('kamar'));
    }

    public function updateKamar(Request $request, $id)
    {
        $data = Kamar::find($id);
        $data->update([
            'nomor_kamar' => $request->input('nomor_kamar'),
            'luas_kamar' => $request->input('luas_kamar'),
            'harga_Sewa' => $request->input('harga_Sewa'),
            'fasilitas' => $request->input('fasilitas'),
            'status' => $request->input('status'),
        ]);
        return redirect('/kamar');
    }
}
