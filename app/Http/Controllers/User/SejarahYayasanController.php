<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SejarahYayasan;
use App\Http\Controllers\Controller;

class SejarahYayasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = SejarahYayasan::all();
        $title = "Sejarah";
        return view('tentang.sejarah', ['sejarah' => $result],['title' => $title ] );
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
    public function destroy(string $id)
    {
        //
    }
}
