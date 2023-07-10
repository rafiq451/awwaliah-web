@extends('layout/main')

@section('container')

<!-- hero section start -->
<section id="home" class="w-full max-h-[200px]">
    <div class="max-w-full h-5 bg-kuns">
        <div class="w-full h-[0.60rem]  bg-primary"></div>
    </div>
      <div class="carousel relative overflow-hidden md:h-128">
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
         
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
            <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
            <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
          <div class="container  mt-5 md:-mt-[11rem] lg:-mt-[15rem]">
            <div class="w-full lg:w-[70%] lg:mx-auto ">
                <h2 class="p-8 my-10 font-bold text-secondry text-lg md:text-2xl sm:text-xl lg:text-3xl  text-center">VISI, MISI DAN MOTTO 
                PONDOK PESANTREN <span class="text-primary"> AWWALIYAH AL-ASIYAH</span></h2>
            </div>  
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->

      <!-- visi&misi section start -->
      <section id="#sejarah" class="p-8  ">
      <div class="container">
        <div class="w-full">
        
          <div class="  my-10  w-full">
            <h2 class="sejarah uppercase">Visi</h2>
            <div class="flex flex-wrap justify-start">
              <div class="max-w-[20%]">
              <h2 class="w-2 h-10 bg-primary mr-3"></h2>
              </div>  
            <div class="max-w-[80%]"> 
            <p class="uppercase text-secondry"> Mempersiapkan Generasi Muslim / Muslimah Yang Beriman Dan Bertaqwa, Berakhlak Mulia Serta Menguasai Ilmu Pengetahuan Dan Teknologi Sedini Mungkin Untuk Menyongsong Masa Depan Yang Gemilang</p>
            </div>
            </div>
            <h2 class="sejarah text-tex uppercase">Misi</h2>
             <div class="w-full">
              <ol class="list-decimal list-decimal-lg mr-2">
                <li>
                  <p>Menyelenggarakan pendidikan pra sekolah berdasarkan al-Qur’an dan al-Hadits, dengan cara membantu anak tumbuh dan berkembang sesuai dengan potensi dan karakteristik perkembangan fisik dan sosial anak.</p>
                  <br/>
                </li>
                <li>
                  <p>Meningkatkan kemampuan guru pada anak usia dini, sehingga memiliki kompetensi profesional dan kepribadian yang matang dan mengembangkan kreatifitas pada anak sedini mungkin.</p>
                  <br/>
                </li>
                <li>
                  <p>Meningkatkan pengertian kepada masyarakat bahwa anak adalah individu yang memiliki keunikan tersendiri dalam proses tumbuh kembangnya.</p>
                  <br>
                </li>
                <li>
                  <p>Meningkatkan peran serta masyarakat dalam menciptakan lingkungan yang sehat, bersih dan nyaman dalam menunjang kegiatan belajar mengajar. meningkatkan kesadaran masyarakat mengenai pentingnya program wajib belajar.</p>
                  <br>
                </li>
              </ol>
             </div>
          </div>
        </div>
      </div>
    </section>
    <!-- visi&misi section end -->

@endsection