<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DewanGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Guru::all();
        $guruOptions = [4,5,6,7,8,10,12];
        return view('admin.guru.index', ['guru' => $result, 'guruOption' => $guruOptions]);
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
            'gender' => 'required',
            'jabatan' => 'required',
            'jenjang' => 'required',
        ]);

        // Simpan data
        $tokoh = new Guru;
        $tokoh->id_pendidikan = $request->id_pendidikan;
        $tokoh->nama = $request->nama;
        $tokoh->gender = $request->gender;
        $tokoh->jabatan = $request->jabatan;
        $tokoh->jenjang = $request->jenjang;

        $tokoh->save();
        return redirect('dashboard/dewan-guru')->with('success', 'Data Dewan Guru berhasil disimpan.');
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
    public function update(Request $request, $id)
    {      // Validasi data yang diterima
        $request->validate([
            'id_pendidikan' => 'numeric',
            'nama' => 'string',
            'gender' => 'string',
            'jabatan' => 'string',
            'jenjang' => 'string',
        ]);
        // Proses update data guru di database
        $guru = Guru::find($id); 

        $guru->id_pendidikan = $request->id_pendidikan;
        $guru->nama = $request->nama;
        $guru->gender = $request->gender;
        $guru->jabatan = $request->jabatan;
        $guru->jenjang = $request->jenjang;
        $guru->save();
            return redirect('/dashboard/dewan-guru')->with('success', "Data Dewan guru berhasil diubah.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect('dashboard/dewan-guru')
            ->with('success', 'Data Dewan Guru berhasil dihapus.');
    }
    
}
