@extends('layout/main')

@section('container')

<section id="home" class="w-full max-h-[200px]">
   
      {{-- <div class="carousel relative overflow-hidden md:h-128"> --}}
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
         
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
            <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
            <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
          <div class="container  mt-5 md:-mt-[11rem] lg:-mt-[15rem]">
            <div class="w-full lg:w-[70%] lg:mx-auto ">
                
            </div>  
          </div>
        </div>
        </div>
</section>
    
      <!-- visi&misi section start -->
      <section id="#sejarah" class="p-8 h-[300px] bg-green-200">
      <div class="w-full md:w-[80%] mx-auto ">
        <div class="w-full relative">
            <div class="my-5 text-center">
                <h4 class="font-medium text-primary">Ketua Yayasan</h4>
                <h1 class="text-2xl font-serif font-semibold">Aang Popo</h1>
            </div>
            <div class="absolute w-full top-32 shadow-lg rounded-md bg-white">
                <div class="container">
                <div class="p-5">      
                <h1 class="font-semibold text-primary mt-20 mb-5">Kata sambutan</h1>
                <p> Bismillahirrahmanirrahiim..
                    Assalamualaikum warrahmatullahi wabarokatuh
                    Alhamdulillahi bini’matihi tattimusholihaat
                    Segala Puji hanya milik Allah Ta’ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafa’at di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.
                    Di tengah kemajuan tehnologi dan informasi saat ini Yayasan Awwaliyah Al-Asiyah  yang bergerak di bidang pendidikan berupaya terus mendorong dan mengupdate  organisasi ini agar mampu menghasilkan lembaga pendidikan formal ataupun non formal yang berkualitas dan mampu bersaing dengan lembaga lain.
                    Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.
                    Kami terus mendorong upaya positif kepada seluruh pengelola  Lembaga sekolah, tenaga pendidik dan  satuan kependidikan Sekolah dibawah naungan  Awwaliyah Al-Asiyah  terus berkembang dan berkontribusi dalam dunia pendidikan khususnya kabupaten Bogor. Kami sangat mengapresiasi adanya website ini. Dengan adanya website ini kami harap masyarakat luas lebih mengenal dekat dengan Lembaga Pendidikan Yayasan Awwaliyah Al-Asiyah, baik Pendidikan formal atau informal serta  para peserta didik juga mampu mengakses informasi akademik melalui website ini dan para guru serta seluruh civitas akademika sekolah di bawah naungan Yayasan Awwaliyah-Al-Asiyah mampu mendapatkan informasi yang uptodate dalam dunia pendidikan.
                    Terakhir kami ucapkan Barokallohufiikum atas semua perjuangan dan pengabdian seluruh guru, pengelola sekolah dan komite sekolah atas kerjasama yang baik selama ini. Perjuangan tak pernah berhenti sampai disini.,karena tantangan masa depan akan silih berganti.
                    Semoga apa yang kita lakukan mendapat ridho dari Allah Ta’ala
                    Wassalamualaikum warrohamtullahi wabarokatuh</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>
    <section class="bg-white h-[1500px]"></section>
    <!-- visi&misi section end -->

@endsection