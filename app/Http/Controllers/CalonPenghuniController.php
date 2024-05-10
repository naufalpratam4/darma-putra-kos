<?php

namespace App\Http\Controllers;

use App\Models\calon_penghuni;
use Illuminate\Http\Request;

class CalonPenghuniController extends Controller
{
    public function calonPenghuni(Request $request)
    {
        $data = new calon_penghuni([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'email' => $request->input('email'),
            'paket' => $request->input('paket'),
        ]);
        $data->save();
        return redirect('/calon-penghuni')->with('success', 'Sukses mengirimkan data, silahkan tunggu respon kami melalui whatsapp');
    }

    public function showCalonPenghuni(Request $request)
    {
        $query = $request->input('query');
        $penghuni = calon_penghuni::where('nama_lengkap', 'like', "%$query%")->get();
        return view('admin.calonPenghuni.calonPenghuni', compact('penghuni'));
    }

    public function deleteCalonPenghuni($id)
    {
        $penghuni = calon_penghuni::find($id);
        if ($penghuni) {
            $penghuni->delete();
            return redirect('/isi-calon-penghuni');
        }
    }
}
