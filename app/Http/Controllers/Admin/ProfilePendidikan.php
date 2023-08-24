<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilePendidikan extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Profile::all();
        return view('admin.profile.index',['profile' => $result]);
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
        $profile = Profile::find($id);
        return view('admin.profile.detail', ['profile' => $profile]);
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
    public function update(Request $request, Profile $profile)
    {
        $validatedData = $request->validate([
            'nama_sekolah' => 'string',
            'npsn' => 'numeric',
            'status_sekolah' => 'string',
            'akreditasi' => 'string',
            'alamat' => 'string',
            'no_telp' => 'numeric',
            'no_fax' => 'numeric',
            'email'=>'email:rfc,dns',


        ]);
        $profile->update($validatedData);

        $namaLembaga = $profile->pendidikan->nama;


        return redirect()->route('profile.index')
            ->with('success', "Data profile pendidikan $namaLembaga  berhasil diperbarui.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
