<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Kepengurusan::all();
        $peranOptions = ['Pembina', 'Pengurus', 'Pengawas'];
        return view('admin.kepengurusan.index',['kepengurusan' => $result, 'peranOptions' => $peranOptions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kepengurusan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'peran' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        Kepengurusan::create($validatedData);
        return redirect('dashboard/kepengurusan')
            ->with('success', 'Data kepengurusan berhasil ditambahkan.');
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Kepengurusan $kepengurusan)
    {
        $validatedData = $request->validate([
            'peran' => 'string',
            'nama' => 'string',
            'jabatan' => 'string'
        ]);

        $kepengurusan->update($validatedData);

        return redirect()->route('kepengurusan.index')
            ->with('success', 'Data kepengurusan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kepengurusan $kepengurusan)
    {
        $kepengurusan->delete();

        return redirect('/dashboard/kepengurusan')
            ->with('success', 'Data kepengurusan berhasil dihapus.');
    }
}
