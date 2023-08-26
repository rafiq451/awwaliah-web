<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\VisiMisiYayasan;
use App\Http\Controllers\Controller;

class VisiMisiUserController extends Controller
{
    public function index()
    {
        $result = VisiMisiYayasan::all();
        return view('tentang.visi&misi',['visi_misi' => $result,'title' => 'Visi dan Misi']);
    }
}
