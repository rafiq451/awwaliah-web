<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\SejarahYayasan;
use App\Http\Controllers\Controller;

class SejarahYayasanUserController extends Controller
{
    public function index()
    {
        $result = SejarahYayasan::all();
        return view('tentang.sejarah',['sejarah' => $result,'title' => 'Sejarah']);
    }
}
