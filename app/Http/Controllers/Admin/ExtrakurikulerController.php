<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id); // Ganti dengan model yang sesuai
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'string',
            'deskripsi' => 'string',
            'id_pendidikan' => 'numeric|in:4,5,6,7,8,10,12',
            'gambar' => 'image|:jpeg,png,jpg'
        ]);

        // Simpan perubahan ke database
        $ekstrakurikuler->nama = $request->nama;
        $ekstrakurikuler->deskripsi = $request->deskripsi;
        $ekstrakurikuler->id_pendidikan = $request->id_pendidikan;
        if ($request->hasFile('gambar')) {
             // Hapus gambar lama sebelum mengganti dengan yang baru
            if ($ekstrakurikuler->gambar !== null) {
                $oldImagePath = public_path('extrakurikuler').'/'.$ekstrakurikuler->gambar;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

        // Pindahkan gambar baru ke direktori
        $imageName = time().'.'.$request->file('gambar')->extension(); // Use file() method here
        $request->gambar->move(public_path('extrakurikuler'), $imageName);
        $ekstrakurikuler->gambar = $imageName;
        }
        $ekstrakurikuler->save();

        return redirect()->route('extrakurikuler.index')->with('success', 'Data berhasil diubah.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id);

        // Delete the associated image file (if it exists)
        if (!empty($ekstrakurikuler->gambar)) {
            $imagePath = public_path('extrakurikuler').'/'.$ekstrakurikuler->gambar;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $ekstrakurikuler->delete();
        return redirect()->route('extrakurikuler.index')->with('success', 'Data berhasil dihapus.');

    }
}
