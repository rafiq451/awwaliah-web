<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Models\KontenPendidikan;
use App\Http\Controllers\Controller;

class KontenPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $result = KontenPendidikan::all();
        return view('admin.kontenPendidikan.index',['kontenPendidikans' => $result]);
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
    public function show($id)
    {
        $kontenPendidikan = KontenPendidikan::find($id);
        return view('admin.kontenPendidikan.detail',['konten' => $kontenPendidikan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kontenPendidikan = KontenPendidikan::find($id);
        return view('admin.kontenPendidikan.edit',['konten' => $kontenPendidikan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       // Validasi data yang diterima
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sejarah' => 'string',
            'visi' => 'string',
            'misi' => 'string',
            'tujuan' => 'string',
        ]);
        // Proses update data konten di database
        $konten = KontenPendidikan::find($id); 

        if ($request->hasFile('gambar')) {
             // Hapus gambar lama sebelum mengganti dengan yang baru
            if ($konten->gambar !== null) {
                $oldImagePath = public_path('kontenPendidikan').'/'.$konten->gambar;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

        // Pindahkan gambar baru ke direktori
        $imageName = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('kontenPendidikan'), $imageName);
        $konten->gambar = $imageName;
        }

        $konten->sejarah = $request->sejarah;
        $konten->visi = $request->visi;
        $konten->misi = $request->misi;
        $konten->tujuan = $request->tujuan;

        $namaLembaga = $konten->pendidikan->nama;


        $konten->save();
            return redirect('/dashboard/kontenpendidikan')->with('success', "konten Pendidikan $namaLembaga berhasil diubah.");
        }
    }
