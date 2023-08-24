<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tokoh;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendiriTokohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Tokoh::all();
        return view('admin.pendiri&tokoh.index',['tokoh' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pendiri&tokoh.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg', // Contoh validasi untuk gambar
        ]);

        // Simpan data
        $tokoh = new Tokoh;
        $tokoh->nama = $request->nama;
        $tokoh->jabatan = $request->jabatan;

        if ($request->hasFile('gambar')) {
            // Pindahkan gambar baru ke direktori
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('pendiri&tokoh'), $imageName);
            $tokoh->gambar = $imageName;
        }

        $tokoh->save();
        return redirect('dashboard/pendiri&tokoh')->with('success', 'Data Pendiri & Tokoh berhasil disimpan.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tokoh = Tokoh::findOrFail($id);
//jfv
            // Hapus gambar dari penyimpanan (jika perlu)
            $gambarPath = public_path("pendiri_tokoh/{$tokoh->gambar}");
            if (file_exists($gambarPath)) {
                unlink($gambarPath);
            }
            $tokoh->delete();

            return redirect('dashboard/pendiri&tokoh')->with('success', 'Pendiri & Tokoh berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect('dashboard/pendiri&tokoh')->with('error', 'Terjadi kesalahan saat menghapus Pendiri & Tokoh.');
        }
    }
}
