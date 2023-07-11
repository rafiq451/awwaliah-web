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
            'title' => 'Tingkat TK',
            'title-nav' => 'TK',
            'slug' => 'taman-anak',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Pondok Pesantren',
            'title-nav' => 'pondok',
            'slug' => 'pondok-pesantren',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat MA',
            'title-nav' => 'MA',
            'slug' => 'tingkat-ma',
            'logo' => 'maa.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SMP Plus',
            'title-nav' => 'SMP Plus',
            'slug' => 'tingkat-smp-plus',
            'logo' => 'smp.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SDIT',
            'title-nav' => 'SDIT',
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
    $pFormal = [
        [
            'title' => 'Tingkat TK',
            'title-nav' => 'TK',
            'slug' => 'taman-anak',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Pondok Pesantren',
            'title-nav' => 'pondok',
            'slug' => 'pondok-pesantren',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat MA',
            'title-nav' => 'MA',
            'slug' => 'tingkat-ma',
            'logo' => 'maa.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SMP Plus',
            'title-nav' => 'SMP Plus',
            'slug' => 'tingkat-smp-plus',
            'logo' => 'smp.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
        [
            'title' => 'Tingkat SDIT',
            'title-nav' => 'SDIT',
            'slug' => 'tingkat-sdit',
            'logo' => 'sdit.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis placeat perferendis deleniti non similique recusandae?'
        ],
    ];
    $new_post = [];
    foreach($pFormal as $formal) {
        if($formal["slug"] === $slug) {
            $new_post = $formal;
        }
    }
    return view('pendidikan' , [
        'title' => 'single',
        'formal' => $new_post  
    ]);
});


// berita terkini
Route::get('/berita', function () {
    
    return view('berita/beritaterkini' , [
        'title' => 'Berita terkini'
    ]);
});