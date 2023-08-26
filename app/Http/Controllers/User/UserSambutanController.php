<?php

namespace App\Http\Controllers\User;

use App\Models\Sambutan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserSambutanController extends Controller
{
    public function index()
    {
        $sambutan = Sambutan::all();
        return view('sambutan.sambutan', ['sambutan' => $sambutan,'title' => 'Sambutan ketua yayasan',]);
    }
}
