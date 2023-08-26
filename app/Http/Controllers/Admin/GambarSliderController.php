<?php

namespace App\Http\Controllers\Admin;

use App\Models\GambarSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GambarSliderController extends Controller
{
    public function index()
    {
        $gambarSlide = GambarSlider::all();
        return view('admin.gambarslide.index', ['gambarSlide' => $gambarSlide]);
    }


    public function store(Request $request)
    {

        $gambarSlide = $request->validate([
            'gambar' => 'required|image|mimes:jpeg,png,jpg'
        ]);
        $gambarSlide = new GambarSlider;
        if ($request->hasFile('gambar')) {
                    // Pindahkan gambar baru ke direktori
                    $imageName = time().'.'.$request->gambar->extension();
                    $request->gambar->move(public_path('gambarSlider'), $imageName);
                    $gambarSlide->gambar = $imageName;
                }

        $gambarSlide->save();
        return redirect('dashboard/gambarslide')->with('success', 'Gambar slider bergasil disimpan');
    }

    public function update(Request $request, string $id)
    {
        $gambarSlide = GambarSlider::findOrFail($id); // Ganti dengan model yang sesuai

        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg'
        ]);
        if ($request->hasFile('gambar')) {
             // Hapus gambar lama sebelum mengganti dengan yang baru
            if ($gambarSlide->gambar !== null) {
                $oldImagePath = public_path('gambarSlider').'/'.$gambarSlide->gambar;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

        // Pindahkan gambar baru ke direktori
        $imageName = time().'.'.$request->file('gambar')->extension(); // Use file() method here
        $request->gambar->move(public_path('gambarSlider'), $imageName);
        $gambarSlide->gambar = $imageName;
        }
        $gambarSlide->save();
        return redirect('dashboard/gambarslide')->with('success-info', 'Gambar slider bergasil disimpan');
    }

    public function destroy($id)
    {
        $gambarSlide = GambarSlider::findOrFail($id);
        // Delete the associated image file (if it exists)
        if (!empty($gambarSlide->gambar)) {
            $imagePath = public_path('gambarSlider').'/'.$gambarSlide->gambar;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $gambarSlide->delete();
        return redirect('dashboard/gambarslide')->with('success-danger', 'Gambar dihapus');
    }
}
