@extends('layout/main')
@section('container')

    <!-- hero section start -->
    <section id="home" class=" h-[680px] w-full ">
      <div class="carousel relative overflow-hidden md:h-128">
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/2.jpg');"></div>
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/3.jpg');"></div>
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
          <button id="prevBtn" class="carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
          <button id="nextBtn" class="carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
        </div>
      </div>
    </section>
    <!-- hero section end -->

    <!-- berita section start -->
    <section id="#berita" class="p-8 bg-slate-200 -mt-[29rem] sm:-mt-[24rem] md:-mt-[10rem]">
      <div class="container">
        <div class="w-full">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Berita Terkini</h4>
          <div class="flex justify-center mt-2 mx-6 items-center">
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
            <h2 class="text-primary text-2xl">
              <i class="fa-regular fa-folder-open"></i>
            </h2>
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
          </div>
          <div class="hover-group flex flex-wrap justify-center mt-4 w-full">
            @foreach ($berita as $item)  
            <div class="mb-8 sm:p-4 sm:w-1/2 lg:w-1/3">
              <div class="relative rounded-md overflow-hidden bg-slate-200">
                <a href="/berita/{{ $item['slug'] }}" class="hover-solo relative group">
                  <img src="img/berita/{{ $item['image'] }}" width="w-full" alt="" />
                  <div class="w-0 h-0 group-hover:w-full group-hover:h-full absolute bg-black opacity-60 top-0 right-30 group">
                    <div class="hover-berita transition ease-in-out duration-500 py-8 sm:py-3 md:py-8 xl:py-10 mx-auto">
                      <img src="img/logo/logo_yayasan.svg" alt="" />
                    </div>
                  </div>
                </a>
                <p class="text-primary font-['Poppins']">{{ $item['tanggal'] }}</p>
                <h4 class=" text-lg font-semibold text-secondry">{{ $item['title'] }}</h4>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- berita section end -->

    <!-- logo section start -->
    <section id="#logo" class="w-full bg-primary pt-10">
      <div class="container">
        <div class="w-full p-10">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-white">Logo Pendidikan</h4>
          <div class="flex justify-center mt-4 mx-6 items-center">
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-white"></div></span>
            <h2 class="text-kuns text-2xl">
              <i class="fa-solid fa-school"></i>
            </h2>
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-white"></div></span>
          </div>
          <div class="flex flex-wrap justify-center py-10 w-full">
            @foreach ($pendidikan as $item)
                
            <div class="mb-4 mx-2 lg:mx-4 sm:mx-6 mt-2 py-2">
              <div class="mb-4 w-32 h-32">
                <a href="" class="grayscale opacity-60 transition hover:opacity-100 hover:grayscale-0 duration-500"><img src="img/logo/{{ $item['logo'] }}" alt="" /></a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- logo section end -->

    <!-- pendidikan formal section start -->
    <section id="#pendidikan-formal" class="w-full bg-slate-200 pt-10">
      <div class="container">
        <div class="w-full p-10">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Awwaliah Al-asiyah</h4>
          <div class="flex justify-center mt-4 mx-6 items-center">
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
            <h2 class="text-primary text-2xl">
              <i class="fa-solid fa-school"></i>
            </h2>
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
          </div>
          <div class="flex flex-wrap justify-center mt-4 w-full">
            @foreach ($pendidikan as $item)
                
            <div class="mb-8 sm:p-4 md:w-1/2 xl:w-1/3">
              <div class="rounded-lg shadow-lg overflow-hidden bg-white bg-opacity-60 mb-4">
                <img src="img/sekolah/school.jpg" alt="" />
                <div class="mx-6 py-8">
                  <h4 class="mb-3 text-xl font-semibold font-['Viga'] text-primary">{{ $item['title'] }}</h4>
                  <p class="font-medium font-['Poppins'] text-tex mb-5">{{ $item['deskripsi'] }}</p>
                  <a href="/pendidikan/{{ $item['slug'] }}" class="text-sm font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300 hover:text-primary text-secondry bg-kuns px-4 py-2 rounded-lg">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- pendidikan section end -->
    
    {{-- pendidikan non formal section start --}}
   
    {{-- pendidikan non formal section end --}}

    <!-- Video section start -->
    <section id="#video" class=" bg-fixed w-full bg-cover bg-center h-60 md:h-80 lg:h-96 xl:h-[530px] relative" style="background-image: url('img/sekolah/school.jpg');">
      <div class="bg-black w-full h-full bg-opacity-60">
        <div class="container">
          <div class="w-full py-8">
            <h4 class="text-center font-bold mb-6 text-2xl lg:text-4xl lg:mt-7 font-['Viga'] text-white">Video Awwaliah Al-Asiyah</h4>
            <h2 class="text-white hover:text-primary transition-all duration-200 text-7xl md:text-[100px] lg:text-[130px] xl:text-[150px] text-center">
              <a href=""><i class="fa-brands fa-youtube"></i></a>
            </h2>
          </div>
        </div>
      </div>
    </section>
    <!-- Video section end -->

@endsection    

  
