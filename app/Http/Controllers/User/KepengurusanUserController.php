<?php

namespace App\Http\Controllers\User;

use App\Models\Kepengurusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KepengurusanUserController extends Controller
{
    public function index()
    {
        $result = Kepengurusan::all();
        return view('tentang.kepengurusan', [
            'title' => 'Kepengurusan', 'kepengurusan' => $result
        ]);
    }
}
