<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Pendidikan::all();
        return view('admin.pendidikan.index',['pendidikan' => $result]);
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
        //
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
    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pendidikan = Pendidikan::findOrFail($id); // Ganti dengan model yang sesuai

        $request->validate([
            'nama' => 'string',
            'jenis_pendidikan',
            'logo' => 'image|mimes:jpeg,png,jpg,svg'
        ]);
        if ($request->hasFile('logo')) {
             // Hapus logo lama sebelum mengganti dengan yang baru
            if ($pendidikan->logo !== null) {
                $oldImagePath = public_path('pendidikan').'/'.$pendidikan->logo;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

        // Pindahkan logo baru ke direktori
        $imageName = time().'.'.$request->file('logo')->extension(); // Use file() method here
        $request->logo->move(public_path('pendidikan'), $imageName);
        $pendidikan->logo = $imageName;
        }
        $pendidikan->save();
        return redirect('dashboard/pendidikan')->with('success-info', 'Gambar slider bergasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
