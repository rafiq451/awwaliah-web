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

    $berita = [
        [
            'title' => 'Kejuaraan Olimpiade',
            'slug' => 'kejuaraan-olimpiade',
            'image' => 'ber1.jpg',
            'tanggal' => '20-02-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Bencana Alam',
            'slug' => 'bencana-alam',
            'image' => 'ber1.jpg',
            'tanggal' => '18-12-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Juara Lomba',
            'slug' => 'juara-lomba',
            'image' => 'ber1.jpg',
            'tanggal' => '21-10-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],

     ];
    return view('home', [
        'title' => 'Home',
        'pendidikan' => $pFormal,
        'berita' => $berita,
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
    return view('Pformal/pendidikan' , [
        'title' => 'single',
        'formal' => $new_post  
    ]);
});


// berita terkini all
Route::get('/berita', function () {
    $berita = [
        [
            'title' => 'Kejuaraan Olimpiade',
            'slug' => 'kejuaraan-olimpiade',
            'image' => 'ber1.jpg',
            'tanggal' => '20-02-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Bencana Alam',
            'slug' => 'bencana-alam',
            'image' => 'ber1.jpg',
            'tanggal' => '18-12-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Juara Lomba',
            'slug' => 'juara-lomba',
            'image' => 'ber1.jpg',
            'tanggal' => '21-10-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
            
     ];
    
    return view('berita/beritaall' , [
        'title' => 'Berita terkini',
        'beritaAll' => $berita
    ]);
});

// berita terkini slug
Route::get('/berita/{slug}', function($slug){
    $berita = [
        [
            'title' => 'Kejuaraan Olimpiade',
            'slug' => 'kejuaraan-olimpiade',
            'image' => 'ber1.jpg',
            'tanggal' => '20-02-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Bencana Alam',
            'slug' => 'bencana-alam',
            'image' => 'ber1.jpg',
            'tanggal' => '18-12-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
        [
            'title' => 'Juara Lomba',
            'slug' => 'juara-lomba',
            'image' => 'ber1.jpg',
            'tanggal' => '21-10-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
        ],
            
     ];
     $detail_berita = [];
     foreach ($berita as $bterkini ) {
        if($bterkini['slug'] === $slug) {
            $detail_berita = $bterkini;
        }
     }

    return view('berita/beritaterkini', [
        'title' => 'single',
        'dberita' => $detail_berita
    ]);
});

