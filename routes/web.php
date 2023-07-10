<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $pFormal = [
        [
            'title' => 'Pondok Pesantren',
            'slug' => 'pondok-pesantren',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat MA',
            'slug' => 'tingkat-ma',
            'logo' => 'maa.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SMP Plus',
            'slug' => 'tingkat-smp-plus',
            'logo' => 'smp.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SDIT',
            'slug' => 'tingkat-sdit',
            'logo' => 'sdit.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
    ];
    return view('home', [
        'title' => 'Home',
        'pendidikan' => $pFormal
    ]);
});

// tentang
Route::get('/sejarah', function () {
    return view('tentang/sejarah', [
        'title' => 'Sejarah'
    ]);
});
Route::get('/visi&misi', function () {
    return view('tentang/visi&misi', [
        'title' => 'Visi & Misi'
    ]);
});
Route::get('/pendiri&tokoh', function () {
    return view('tentang/pendiri', [
        'title' => 'Pendiri & Tokoh'
    ]);
});
Route::get('/kepengurusan', function () {
    return view('tentang/kepengurusan', [
        'title' => 'Kepengurusan'
    ]);
});
Route::get('/identitas', function () {
    return view('tentang/identitas');
});

// pendidikan
Route::get('/pendidikan/{slug}', function ($slug) {
    return view('pendidikan' , [
        'title' => 'single'   
    ]);
});


// berita terkini
Route::get('/berita', function () {
    return view('berita/beritaterkini' , [
        'title' => 'Berita terkini'
    ]);
});