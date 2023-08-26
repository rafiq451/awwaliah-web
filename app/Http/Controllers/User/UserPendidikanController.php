<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPendidikanController extends Controller
{
    public function show($id, $slug)
    {
        $konten = KontenPendidikan::all();
        return view('Pformal/pendidikanf');
    }
}
