<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\IdentitasYayasan;
use App\Http\Controllers\Controller;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $result = IdentitasYayasan::all();
        return view('admin.identitas.index',['identitas' => $result]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $identitas = IdentitasYayasan::findorfail(1);
        return view('admin.identitas.edit', ['identitas' => $identitas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
          // Validasi data yang diterima
        $request->validate([
            'nama' => 'string',
            'makna_bentuk' => 'string',
            'makna_warna' => 'string',
            'logo' => 'image|mimes:jpeg,png,jpg,svg',
        ]);
        // Proses update data sejarah di database
        $identitas = IdentitasYayasan::find(1); 
        $identitas->nama = $request->nama;
        $identitas->makna_bentuk = $request->makna_bentuk;
        $identitas->makna_warna = $request->makna_warna;

        if ($request->hasFile('logo')) {
        // Hapus gambar lama (jika ada)
        if ($identitas->logo) {
            $identitas = IdentitasYayasan::find(1);
            // Hapus logo dari penyimpanan (jika perlu)
            $logoPath = public_path("IdentitasYayasan/{$identitas->logo}");
            if (file_exists($logoPath)) {
                unlink($logoPath);
            }
            $identitas->delete();
        }

        // Pindahkan logo baru ke direktori
        $imageName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('IdentitasYayasan'), $imageName);
        $identitas->logo = $imageName;
        }


        $identitas->save();
            return redirect('/dashboard/identitas')->with('success', 'Sambutan berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
