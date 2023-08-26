<?php

namespace App\Http\Controllers\Admin;

use App\Models\MaknaLogo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MaknaLogoController extends Controller
{
    public function index()
    {
        $result = MaknaLogo::all();
        return view('admin.maknaLogo.index',['makna' => $result]);
    }


    public function update(Request $request, String $id)
    {
        $maknaLogo = MaknaLogo::findOrFail($id); // Ganti dengan model yang sesuai

        $request->validate([
            'id_pendidikan' => 'numeric',
            'makna_bentuk' => 'string',
            'makna_warna' => 'string',
        ]);
        
        $maknaLogo->makna_bentuk = $request->makna_bentuk;
        $maknaLogo->makna_warna = $request->makna_warna;

        $maknaLogo->save();
        return redirect('dashboard/makna-logo')->with('success-info', 'Makna logo bergasil di ubah');
    }
}
