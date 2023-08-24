<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Ekstrakurikuler;
use App\Http\Controllers\Controller;

class ExtrakurikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Ekstrakurikuler::all();
        return view('admin.extrakurikuler.index',['extrakurikuler' => $result]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'id_pendidikan' => 'required|numeric',
            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg', // Contoh validasi untuk gambar        
        ]);

        // Simpan data
        $ekstrakurikuler = new Ekstrakurikuler;
        $ekstrakurikuler->id_pendidikan = $request->id_pendidikan;
        $ekstrakurikuler->nama = $request->nama;
        $ekstrakurikuler->deskripsi = $request->deskripsi;
        if ($request->hasFile('gambar')) {
                    // Pindahkan gambar baru ke direktori
                    $imageName = time().'.'.$request->gambar->extension();
                    $request->gambar->move(public_path('extrakurikuler'), $imageName);
                    $ekstrakurikuler->gambar = $imageName;
                }

        $ekstrakurikuler->save();
        return redirect('dashboard/extrakurikuler')->with('success', 'Data ekstrakurikuler berhasil disimpan.');
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
    public function destroy(string $id)
    {
        //
    }
}
