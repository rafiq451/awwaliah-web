<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfilePendidikan;
use App\Http\Controllers\Admin\SejarahController;
use App\Http\Controllers\Admin\SambutanController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DewanGuruController;
use App\Http\Controllers\Admin\IdentitasController;
use App\Http\Controllers\Admin\MaknaLogoController;
use App\Http\Controllers\Admin\PendidikanController;
use App\Http\Controllers\User\UserSambutanController;
use App\Http\Controllers\User\VisiMisiUserController;
use App\Http\Controllers\Admin\GambarSliderController;
use App\Http\Controllers\Admin\KepengurusanController;
use App\Http\Controllers\Admin\PendiriTokohController;
use App\Http\Controllers\Admin\ExtrakurikulerController;
use App\Http\Controllers\Admin\VisiMisiControllerYayasan;
use App\Http\Controllers\User\KepengurusanUserController;
// use App\Http\Controllers\User\SambutanController as ENTER;

use App\Http\Controllers\Admin\KontenPendidikanController;
use App\Http\Controllers\User\SejarahYayasanUserController;

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

Route::get('/dashboard',[DashboardController::class, 'index']);


Route::get('/dashboard/berita',[BeritaController::class, 'index']);
Route::get('/dashboard/berita/tambah',[BeritaController::class, 'create']);

Route::get('/dashboard/gambarslide', [GambarSliderController::class, 'index']);
Route::post('/dashboard/gambarslide/store', [GambarSliderController::class, 'store'])->name('gambarslide.store');
Route::put('/dashboard/gambarslide/{id}', [GambarSliderController::class, 'update'])->name('gambarslide.update');
Route::delete('/dashboard/gambarslide/{id}', [GambarSliderController::class, 'destroy'])->name('gambarslide.destroy');

Route::get('/dashboard/sambutan', [SambutanController::class, 'index']);
Route::get('/dashboard/sambutan/edit',[SambutanController::class, 'edit'])->name('sambutan.edit');
Route::put('/dashboard/sambutan/update-sejarah', [SambutanController::class, 'update'])->name('sambutan.update');


Route::get('/dashboard/sejarah',[SejarahController::class, 'index']);
Route::get('/dashboard/sejarah/edit',[SejarahController::class, 'edit']);
Route::post('/dashboard/sejarah/update-sejarah',[SejarahController::class, 'update']);
Route::put('/dashboard/sejarah/update-sejarah', [SejarahController::class, 'update'])->name('sejarah.update');

Route::get('/dashboard/visi&misi',[VisiMisiControllerYayasan::class, 'index']);
Route::get('/dashboard/visi&misi/edit',[VisiMisiControllerYayasan::class, 'edit']);
Route::post('/dashboard/visi&misi/update-visi&misi',[VisiMisiControllerYayasan::class, 'update']);

Route::get('/dashboard/pendiri&tokoh',[PendiriTokohController::class, 'index']);
Route::get('/dashboard/pendiri&tokoh/tambah',[PendiriTokohController::class, 'create']);
Route::post('/dashboard/pendiri&tokoh/store',[PendiriTokohController::class, 'store'])->name('tokoh.store');
Route::get('/dashboard/pendiri&tokoh/{id}', [PendiriTokohController::class, 'destroy'])->name('tokoh.destroy');


Route::get('/dashboard/kepengurusan',[KepengurusanController::class, 'index'])->name('kepengurusan.index');
Route::post('/dashboard/kepengurusan',[KepengurusanController::class, 'store'])->name('kepengurusan.store');
// Route::post('/dashboard/kepengurusan/{$id}',[KepengurusanController::class, 'destroy'])->name('kepengurusan.destroy');
Route::resource('kepengurusan', KepengurusanController::class);

Route::get('/dashboard/identitas',[IdentitasController::class, 'index']);
Route::get('/dashboard/identitas/edit',[IdentitasController::class, 'edit'])->name('identitas.edit');
Route::put('/dashboard/identitas/update-sejarah', [IdentitasController::class, 'update'])->name('identitas.update');



Route::get('/dashboard/pendidikan',[PendidikanController::class, 'index']);
Route::put('/dashboard/pendidikan/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');



Route::get('/dashboard/kontenpendidikan',[KontenPendidikanController::class, 'index']);
Route::get('/dashboard/kontenpendidikan/{id}/detail',[KontenPendidikanController::class, 'show']);
Route::get('/dashboard/kontenpendidikan/{id}/edit',[KontenPendidikanController::class, 'edit']);
Route::put('/dashboard/kontenpendidikan/{id}/update-konten',[KontenPendidikanController::class, 'update'])->name('konten.update');

Route::get('/dashboard/dewan-guru', [DewanGuruController::class, 'index']);
Route::post('/dashboard/dewan-guru/store',[DewanGuruController::class, 'store'])->name('dewan-guru.store');
Route::put('/dashboard/dewan-guru/{id}/update-dewan-guru',[DewanGuruController::class, 'update'])->name('dewanguru.update');
Route::delete('/dashboard/dewan-guru/{guru}',[DewanGuruController::class, 'destroy'])->name('dewan-guru.destroy');

Route::get('/dashboard/profile', [ProfilePendidikan::class, 'index'])->name('profile.index');
Route::get('/dashboard/profile/{id}/detail', [ProfilePendidikan::class, 'show'])->name('profile.show');
Route::resource('profile', ProfilePendidikan::class);

Route::get('/dashboard/extrakurikuler', [ExtrakurikulerController::class, 'index'])->name('extrakurikuler.index');
Route::post('/dashboard/extrakurikuler/store',[ExtrakurikulerController::class, 'store'])->name('exrakurikuler.store');
Route::put('/dashboard/extrakurikuler/{id}', [ExtrakurikulerController::class, 'update'])->name('extrakurikuler.update');
Route::delete('/dashboard/extrakurikuler/{id}', [ExtrakurikulerController::class, 'destroy'])->name('extrakurikuler.destroy');

Route::get('/dashboard/makna-logo', [MaknaLogoController::class, 'index'])->name('makna-logo.index');
Route::put('/dashboard/makna-logo/{id}', [MaknaLogoController::class, 'update'])->name('makna-logo.update');





// Route::get('/', function () {
    
//     $pFormal = [
//         [
//             'title' => 'Tingkat TK',
//             'title-nav' => 'TK',
//             'slug' => 'taman-anak',
//             'logo' => 'pondok.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
        
//         [
//             'title' => 'Tingkat MA',
//             'title-nav' => 'MA',
//             'slug' => 'tingkat-ma',
//             'logo' => 'maa.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
//         [
//             'title' => 'Tingkat SMP Plus',
//             'title-nav' => 'SMP Plus',
//             'slug' => 'tingkat-smp-plus',
//             'logo' => 'smp.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
//         [
//             'title' => 'Tingkat SDIT',
//             'title-nav' => 'SDIT',
//             'slug' => 'tingkat-sdit',
//             'logo' => 'sdit.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
//     ];

//     $pnonFormal = [
//         [
//             'title' => 'Pondok Pesantren',
//             'title-nav' => 'Pondok Pesantren',
//             'slug' => 'pondok-pesantren',
//             'logo' => 'pondok.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
        
//         [
//             'title' => 'Asrama Anak Yatim',
//             'title-nav' => 'Asrama Anak Yatim',
//             'slug' => 'asrama-anak-yatim',
//             'logo' => 'maa.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
//         [
//             'title' => 'Asrama Tahfidz',
//             'title-nav' => 'Asrama Tahfidz',
//             'slug' => 'asrama-tahfidz',
//             'logo' => 'smp.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
//         [
//             'title' => 'Majlis Ta`lim',
//             'title-nav' => 'Majlis Ta`lalim',
//             'slug' => 'majlis-ta`lim',
//             'logo' => 'smp.svg',
//             'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
//         ],
      
//     ];

//     $berita = [
//         [
//             'title' => 'Kejuaraan Olimpiade',
//             'slug' => 'kejuaraan-olimpiade',
//             'image' => 'ber1.jpg',
//             'tanggal' => '20-02-2023',
//             'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
//         ],
//         [
//             'title' => 'Bencana Alam',
//             'slug' => 'bencana-alam',
//             'image' => 'ber1.jpg',
//             'tanggal' => '18-12-2023',
//             'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
//         ],
//         [
//             'title' => 'Juara Lomba',
//             'slug' => 'juara-lomba',
//             'image' => 'ber1.jpg',
//             'tanggal' => '21-10-2023',
//             'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
//         ],
//         [
//             'title' => 'Juara Lomba',
//             'slug' => 'juara-lomba',
//             'image' => 'ber1.jpg',
//             'tanggal' => '21-10-2023',
//             'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
//         ],

//      ];
//      $sambutan = [
//         [
//             'title' => 'Sambutan Singkat',
//             'slug' => 'sambutan-ketua-yayasan',
//             'mukodimah' => ' Bismillahirrahmanirrahiim..
//             Assalamualaikum warrahmatullahi wabarokatuh
//             Alhamdulillahi bini matihi tattimusholihaat
//             Segala Puji hanya milik Allah Ta ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafaat di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.',
//             'sambutan-singkat' => 'Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.',
//             'sambutan-lengkap' => ' Bismillahirrahmanirrahiim..
//             Assalamualaikum warrahmatullahi wabarokatuh
//             Alhamdulillahi bini matihi tattimusholihaat
//             Segala Puji hanya milik Allah Ta ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafaat di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.
//             Di tengah kemajuan tehnologi dan informasi saat ini Yayasan Awwaliyah Al-Asiyah  yang bergerak di bidang pendidikan berupaya terus mendorong dan mengupdate  organisasi ini agar mampu menghasilkan lembaga pendidikan formal ataupun non formal yang berkualitas dan mampu bersaing dengan lembaga lain.
//             Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.
//             Kami terus mendorong upaya positif kepada seluruh pengelola  Lembaga sekolah, tenaga pendidik dan  satuan kependidikan Sekolah dibawah naungan  Awwaliyah Al-Asiyah  terus berkembang dan berkontribusi dalam dunia pendidikan khususnya kabupaten Bogor. Kami sangat mengapresiasi adanya website ini. Dengan adanya website ini kami harap masyarakat luas lebih mengenal dekat dengan Lembaga Pendidikan Yayasan Awwaliyah Al-Asiyah, baik Pendidikan formal atau informal serta  para peserta didik juga mampu mengakses informasi akademik melalui website ini dan para guru serta seluruh civitas akademika sekolah di bawah naungan Yayasan Awwaliyah-Al-Asiyah mampu mendapatkan informasi yang uptodate dalam dunia pendidikan.
//             Terakhir kami ucapkan Barokallohufiikum atas semua perjuangan dan pengabdian seluruh guru, pengelola sekolah dan komite sekolah atas kerjasama yang baik selama ini. Perjuangan tak pernah berhenti sampai disini.,karena tantangan masa depan akan silih berganti.
//             Semoga apa yang kita lakukan mendapat ridho dari Allah Taala
//             Wassalamualaikum warrohamtullahi wabarokatuh'
//         ]
//         ];
//     return view('home', [
//         'title' => 'Home',
//         'pendidikanF' => $pFormal,
//         'pendidikanNF' => $pnonFormal,
//         'berita' => $berita,
//         'sambutan' => $sambutan
//     ]);
// });

// home
Route::get('/',[HomeController::class, 'index']);

Route::get('sambutan/{slug}',[UserSambutanController::class, 'index']);
// tentang
Route::get('/sejarah',[SejarahYayasanUserController::class, 'index']);
Route::get('/visi&misi',[VisiMisiUserController::class, 'index']);


// Route::get('/visi&misi', function () {
//     return view('tentang/visi&misi', [
//         'title' => 'Visi & Misi'
//     ]);
// });
Route::get('/pendiri-tokoh', function () {
    return view('tentang/pendiri', [
        'title' => 'Pendiri & Tokoh'
    ]);
});
Route::get('/kepengurusan', [KepengurusanUserController::class, 'index'])->name('kepengurusanUser.index');
Route::get('/identitas', function () {
    return view('tentang/identitas', [
        'title' => 'Identitas'
    ]);
});

// identitas
Route::get('/usaha', function() {
    return view('usaha/usaha', [
        'title' => 'Usaha'
    ]);
});

// sambutan ketua yayasan
// Route::get('/sambutan/{slug}', function($slug) {
//     $sambutan = [
//         [
//             'title' => 'Sambutan ketua yayasan',
//             'slug' => 'sambutan-ketua-yayasan',
//             'sambutan-singkat' => 'Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.',
//             'sambutan-lengkap' => ' Bismillahirrahmanirrahiim..
//             Assalamualaikum warrahmatullahi wabarokatuh
//             Alhamdulillahi bini matihi tattimusholihaat
//             Segala Puji hanya milik Allah Ta ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafaat di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.
//             Di tengah kemajuan tehnologi dan informasi saat ini Yayasan Awwaliyah Al-Asiyah  yang bergerak di bidang pendidikan berupaya terus mendorong dan mengupdate  organisasi ini agar mampu menghasilkan lembaga pendidikan formal ataupun non formal yang berkualitas dan mampu bersaing dengan lembaga lain.
//             Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.
//             Kami terus mendorong upaya positif kepada seluruh pengelola  Lembaga sekolah, tenaga pendidik dan  satuan kependidikan Sekolah dibawah naungan  Awwaliyah Al-Asiyah  terus berkembang dan berkontribusi dalam dunia pendidikan khususnya kabupaten Bogor. Kami sangat mengapresiasi adanya website ini. Dengan adanya website ini kami harap masyarakat luas lebih mengenal dekat dengan Lembaga Pendidikan Yayasan Awwaliyah Al-Asiyah, baik Pendidikan formal atau informal serta  para peserta didik juga mampu mengakses informasi akademik melalui website ini dan para guru serta seluruh civitas akademika sekolah di bawah naungan Yayasan Awwaliyah-Al-Asiyah mampu mendapatkan informasi yang uptodate dalam dunia pendidikan.
//             Terakhir kami ucapkan Barokallohufiikum atas semua perjuangan dan pengabdian seluruh guru, pengelola sekolah dan komite sekolah atas kerjasama yang baik selama ini. Perjuangan tak pernah berhenti sampai disini.,karena tantangan masa depan akan silih berganti.
//             Semoga apa yang kita lakukan mendapat ridho dari Allah Taala
//             Wassalamualaikum warrohamtullahi wabarokatuh'
//         ]
//         ];
//         $new_sambutan = [];
//         foreach($sambutan as $sketuyayasan) {
//             if($sketuyayasan["slug"] === $slug) {
//                 $new_sambutan = $sketuyayasan;
//             }
//         }
//         return view('sambutan/sambutan' , [
//             'title' => 'sambutan',
//             'sketuyayasan' => $new_sambutan  
//         ]);
// });


// pendidikan non formal 
Route::get('/pendidikan/{slug}', function ($slug) {
    $pnonFormal = [
        [
            'title' => 'Pondok Pesantren',
            'title-nav' => 'Pondok Pesantren',
            'slug' => 'pondok-pesantren',
            'logo' => 'pondok.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        
        [
            'title' => 'Asrama Anak Yatim',
            'title-nav' => 'Asrama Anak Yatim',
            'slug' => 'asrama-anak-yatim',
            'logo' => 'maa.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Asrama Tahfidz',
            'title-nav' => 'Asrama Tahfidz',
            'slug' => 'asrama-tahfidz',
            'logo' => 'smp.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Majlis Ta`lim',
            'title-nav' => 'Majlis Ta`lalim',
            'slug' => 'majlis-ta`lim',
            'logo' => 'smp.svg',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
      
    ];
    $new_nP = [];
    foreach($pnonFormal as $Nformal) {
        if($Nformal["slug"] === $slug) {
            $new_nP = $Nformal;
        }
    }
    return view('PnonFormal/pendidikan' , [
        'title' => 'single',
        'Nformal' => $new_nP  
    ]);
});

// pendidikan formal
Route::get('/pendidikan/{slug}', function ($slugF) {
    $pFormal = [
        [
            'title' => 'Tingkat TK',
            'nama-sekolah' => 'SMP PLUS AWWALIYAH AL-ASIYAH',
            'title-nav' => 'TK',
            'slug' => 'taman-anak',
            'logo' => 'pondok.svg',
            'image' => '1sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat MA',
            'nama-sekolah' => 'MAS AL ASIYAH',
            'title-nav' => 'MA',
            'slug' => 'tingkat-ma',
            'logo' => 'maa.svg',
            'image' => '1sch.jpg',
            'alamat' => 'Jalan Raya Jakarta Bogor KM 41, Lingkungan 04 Kranji Barat RT. 001/011',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat SMP Plus',
            'nama-sekolah' => 'SMP PLUS AWWALIYAH AL-ASIYAH',
            'title-nav' => 'SMP Plus',
            'slug' => 'tingkat-smp-plus',
            'logo' => 'smp.svg',
            'image' => '2sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat SDIT',
            'nama-sekolah' => 'SDIT AL ASIYAH',
            'title-nav' => 'SDIT',
            'slug' => 'tingkat-sdit',
            'logo' => 'sdit.svg',
            'image' => '3sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],

    ];

    
    $new_post = [];
    foreach($pFormal as $formal) {
        if($formal["slug"] === $slugF) {
            $new_post = $formal;
        }
    }
    return view('Pformal/pendidikanf' , [
        'title' => 'single',
        'formal' => $new_post,
        // 'detail' => $data
    ]);
}); 

// detail profil pendidikan formal
Route::get('/detail/{slug}', function($slug) {
    $pFormal = [
        [
            'title' => 'Tingkat TK',
            'nama-sekolah' => 'SMP PLUS AWWALIYAH AL-ASIYAH',
            'title-nav' => 'TK',
            'slug' => 'taman-anak',
            'logo' => 'pondok.svg',
            'image' => '1sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat MA',
            'nama-sekolah' => 'MAS AL ASIYAH',
            'title-nav' => 'MA',
            'slug' => 'tingkat-ma',
            'logo' => 'maa.svg',
            'image' => '1sch.jpg',
            'alamat' => 'Jalan Raya Jakarta Bogor KM 41, Lingkungan 04 Kranji Barat RT. 001/011',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat SMP Plus',
            'nama-sekolah' => 'SMP PLUS AWWALIYAH AL-ASIYAH',
            'title-nav' => 'SMP Plus',
            'slug' => 'tingkat-smp-plus',
            'logo' => 'smp.svg',
            'image' => '2sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],
        [
            'title' => 'Tingkat SDIT',
            'nama-sekolah' => 'SDIT AL ASIYAH',
            'title-nav' => 'SDIT',
            'slug' => 'tingkat-sdit',
            'logo' => 'sdit.svg',
            'image' => '3sch.jpg',
            'alamat' => 'LINGKUNGAN 04 KRANJI BARAT',
            'kelurahan' => 'CIRIUNG',
            'kecamatan' => 'CIBINONG',
            'kabupaten' => 'BOGOR',
            'posisiGeografis' => 'peta',
            'notlp' => '02187911069',
            'email' => 'smpplusawwaliyahalasiyah@gmail.com',
            'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
        ],

    ];


    $detail_post = [];

    foreach($pFormal as $detail) {
        if($detail["slug"] === $slug) {
            $detail_post = $detail;
            // break; // Exit the loop if a matching slug is found
        }
    }

    

    return view('/Pformal/detail/detaildata', [
        'title' => 'detail',
        'detail' => $detail_post,
    ]);
});

// usaha
Route::get('/travel', function() {
    
    
    $travel = [
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
    ];
    return view('usaha/travel' , [
        'title' => 'Usaha',
        'travel' => $travel
    ]);
});

// usaha detail
Route::get('/travel/{slug}', function($slug) {
       $travel = [
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
        [
            'title' => 'Haji & Umroh',
            'gambar' => '1.jpg',
            'slug' => 'haji-umroh',
            'deskripsi' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum hic excepturi exercitationem, nisi doloribus quibusdam delectus, commodi, officiis porro facilis cupiditate! Sapiente nostrum possimus, delectus totam modi fugit unde corrupti magni dicta nobis! Dicta aliquid consectetur eius optio dignissimos totam aspernatur, velit libero explicabo nisi veniam fuga eveniet porro deserunt accusantium illum alias repudiandae esse veritatis. Quas ad nesciunt facilis, neque ut temporibus debitis, autem eos aspernatur nam quod ratione impedit. Magnam nulla debitis quos et cum a mollitia optio. Voluptatum, pariatur? Unde similique temporibus voluptatum aspernatur aliquid? Aspernatur libero quis nostrum. Ex, hic consequuntur rerum consequatur fugit blanditiis ipsum!'

        ],
    ];
    $detail_travel = [];
    foreach ($travel as $usa ) {
       if($usa['slug'] === $slug) {
           $detail_travel = $usa;
       }
    }

   return view('usaha/detail/detailtravel', [
       'title' => 'single',
       'travel' => $detail_travel
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
        [
            'title' => 'Juara Lomba',
            'slug' => 'juara-lomba',
            'image' => 'ber1.jpg',
            'tanggal' => '21-10-2023',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectet      ur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
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




