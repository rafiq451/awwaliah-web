<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\VisiMisiYayasan;

class VisiMisiControllerYayasan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = VisiMisiYayasan::find(1);
        return view('admin.visi_misiYayasan.index',["visi_misi" => $result]);
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
    public function edit()
    {
        $result = VisiMisiYayasan::find(1);
        return view('admin.visi_misiYayasan.edit',["visi_misi" => $result]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
         // Validasi data yang diterima
        $request->validate([
            'visi' => 'string',
            'misi' => 'string',
        ]);
        // Proses update data sejarah di database
        $visi_misi = VisiMisiYayasan::find(1); 

        $visi_misi->visi = $request->visi;
        $visi_misi->misi = $request->misi;

        $visi_misi->save();
        return redirect('/dashboard/visi&misi')->with('success', 'Visi&Misi berhasil diubah.');
    }
}

