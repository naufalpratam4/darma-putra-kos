<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function dataPesan()
    {
        $pesan = Contact::all();

        return view('admin.PesAn', compact('pesan'));
    }
    public function TulisPesan(Request $request)
    {
        $data = new Contact([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'no_hp' => $request->input('no_hp'),
            'pesan' => $request->input('pesan'),
        ]);
        $data->save();

        return redirect('/')->with('success', 'Pesan telah tersampaikan, ditunggu balasannya ya');
    }
}
