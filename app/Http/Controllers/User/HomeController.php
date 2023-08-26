<?php

namespace App\Http\Controllers\User;

use App\Models\Sambutan;
use App\Models\Pendidikan;
use App\Models\GambarSlider;
use Illuminate\Http\Request;
use App\Models\KontenPendidikan;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $gambarSlide = GambarSlider::all();
        $sambutan = Sambutan::all();
        $pendidikan = Pendidikan::all();
        $kontenPendidikan = KontenPendidikan::all();
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
                    'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsa culpa fuga molestias quas, laborum sequi sed itaque totam deserunt.'
                ],

            ];

            // $pFormal = [
            //     [
            //         'title' => 'Tingkat TK',
            //         'title-nav' => 'TK',
            //         'slug' => 'taman-anak',
            //         'logo' => 'pondok.svg',
            //         'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
            //     ],
                
            //     [
            //         'title' => 'Tingkat MA',
            //         'title-nav' => 'MA',
            //         'slug' => 'tingkat-ma',
            //         'logo' => 'maa.svg',
            //         'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
            //     ],
            //     [
            //         'title' => 'Tingkat SMP Plus',
            //         'title-nav' => 'SMP Plus',
            //         'slug' => 'tingkat-smp-plus',
            //         'logo' => 'smp.svg',
            //         'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
            //     ],
            //     [
            //         'title' => 'Tingkat SDIT',
            //         'title-nav' => 'SDIT',
            //         'slug' => 'tingkat-sdit',
            //         'logo' => 'sdit.svg',
            //         'deskripsi' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum quasi veniam, soluta tempora officiis '
            //     ],
            // ];

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

            $title = "Home";
            $slug = 'sambutan-ketua-yayasan';
        return view('home',
        ['sambutan' => $sambutan, 'berita' => $berita, 'pendidikanF'=> $pendidikan, 'pendidikanNF' => $pnonFormal, 'title' => $title,'slug' => $slug,
            'konten' => $kontenPendidikan
        ] );
    }
}
