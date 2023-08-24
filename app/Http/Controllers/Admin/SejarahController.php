<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\SejarahYayasan;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    public function index(){

        $result = SejarahYayasan::all();
        return view('admin.sejarahYayasan.index',['sejarah' => $result]);
    }

    public function edit(){
        $sejarah = SejarahYayasan::find(1);

        $gambarPath = $sejarah->gambar;

        return view('admin.sejarahYayasan.edit', ['sejarah' => $sejarah]);
    }

    public function update(Request $request){
        // Validasi data yang diterima
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sejarah' => 'string',
            'kurikulum' => 'string',
        ]);
        // Proses update data sejarah di database
        $sejarah = SejarahYayasan::find(1); 

        if ($request->hasFile('gambar')) {
        // Hapus gambar lama (jika ada)
        if ($sejarah->gambar) {
            $sejarah = SejarahYayasan::find(1);
            // Hapus gambar dari penyimpanan (jika perlu)
            $gambarPath = public_path("images/{$sejarah->gambar}");
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
            $sejarah->delete();
        }

        // Pindahkan gambar baru ke direktori
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $imageName);
        $sejarah->gambar = $imageName;
        }

        $sejarah->sejarah = $request->sejarah;
        $sejarah->kurikulum = $request->kurikulum;


        $sejarah->save();
            return redirect('/dashboard/sejarah')->with('success', 'Sejarah yayasan berhasil diubah.');
        }
}
