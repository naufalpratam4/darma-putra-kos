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
            'harga_sewa' => $request->input('harga_sewa'),
            'fasilitas' => $request->input('fasilitas'),
            'status' => $request->input('status'),
        ]);
        $data->save();

        return redirect('/kamar');
    }
}
