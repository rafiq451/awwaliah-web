<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SambutanController extends Controller
{
    public function index()
    {
        $result = Sambutan::all();
        return view('admin.sambutan.index',['sambutan' => $result]);
    }

    public function edit(){
        $sambutan = Sambutan::find(1);
        // $gambarPath = $sambutan->gambar;
        return view('admin.sambutan.edit', ['sambutan' => $sambutan]);
    }

    public function update(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'string',
            'sambutan' => 'string',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        // Proses update data sejarah di database
        $sambutan = Sambutan::find(1); 

        if ($request->hasFile('gambar')) {
        // Hapus gambar lama (jika ada)
        if ($sambutan->gambar) {
            $sambutan = Sambutan::find(1);
            // Hapus gambar dari penyimpanan (jika perlu)
            $gambarPath = public_path("Sambutan/{$sambutan->gambar}");
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
            $sambutan->delete();
        }

        // Pindahkan gambar baru ke direktori
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('Sambutan'), $imageName);
        $sambutan->gambar = $imageName;
        }
        $sambutan->nama = $request->nama;
        $sambutan->sambutan = $request->sambutan;


        $sambutan->save();
            return redirect('/dashboard/sambutan')->with('success', 'Sambutan berhasil diubah.');
        }
}

