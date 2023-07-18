<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SejarahYayasan;
use App\Http\Controllers\Controller;

class SejarahController extends Controller
{
    public function index(){

        $result = SejarahYayasan::all();
        return view('admin.sejarahYayasan.index',['sejarah' => $result]);
    }
}
