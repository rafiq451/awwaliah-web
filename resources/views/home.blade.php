@extends('layout/main')
@section('container')

    <!-- hero section start -->
    <section id="home" class=" h-[680px] w-full ">
      <div class="carousel relative overflow-hidden md:h-128 xl:h-[650px] ">
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/4.jpg');">
            <div class="w-full h-full bg-black opacity-40"></div>
          </div>
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/6.jpg');">
            <div class="w-full h-full bg-black opacity-40"></div>
          </div>
          <div class="carousel-item bg-cover bg-center absolute h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/7.jpg');">
            <div class="w-full h-full bg-black opacity-40"></div>
          </div>
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
          <button id="prevBtn" class="carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="fa-solid fa-arrow-left-long"></i></button>
          <button id="nextBtn" class="carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
      </div>
    </section>
    <!-- hero section end -->

    {{-- sambuatan ketua yayasan section start --}}
    <section id="#sambutan" class="bg-white h-[1080px] sm:h-[1000px]  -mt-[27rem] sm:-mt-[24rem] md:-mt-[11rem] lg:h-[600px]">
      <div class="container border border-white">
        @foreach ($sambutan as $item)   
        <div class="flex flex-wrap px-2 lg:-mt-20 -mt-5 relative ">
          <div class="relative w-full self-center px-2 lg:w-1/2 my-10">
            <span class="absolute md:w-[500px] -top-3 -left-1/2">
              <svg viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                <defs>
                  <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color: rgb(60, 165, 92);"></stop>
                    <stop offset="100%" style="stop-color: rgb(181, 172, 73);"></stop>
                  </linearGradient>
                </defs>
                <path id="blob" d="M425,347.5Q363,445,244.5,455Q126,465,64,357.5Q2,250,67.5,148.5Q133,47,252,43.5Q371,40,429,145Q487,250,425,347.5Z" fill="url(#gradient)"></path>
              </svg>
            </span>
            <div class="absolute">
              <h1 class="text-base font-semibold text-primary md:text-xl">{{ $item['title'] }}<span class="block font-bold text-secondry  text-3xl sm:text-4xl mt-1 lg:text-5xl">Ketua Yayasan</span></h1>
            <p class="font-normal italic text-secondry my-5 leading-relaxed">{{ $item['mukodimah'] }}</p>
            <p class="font-normal italic text-secondry my-5 leading-relaxed">"{{ $item['sambutan-singkat'] }}"</p>
            <a href="sambutan/{{ $item['slug'] }}" class="text-sm font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Selengkapnya</a>
          </div>
          </div>
          <div class=" mb-32 lg:my-0 relative top-[640px] sm:top-52 md:top-72 lg:top-44 w-full self-end px-2 lg:w-1/2">
            <div class="relative mt-11 lg:mt-5 lg:right-0 sm:p-10 md:p-20 lg:p-1 xl:p-16">
              <img src="{{ asset('img/rafiq_dosen1.png') }}" alt="" class="max-w-full relative z-10" />
              <span class="absolute bottom-10 scale-150 sca left-1/2 -translate-x-1/2 sm:scale-[2.7] sm:bottom-28 md:scale-[2.5] md:bottom-60 lg:scale-[2.5] lg:bottom-32 xl:scale-[2.5] xl:bottom-48">
                
                <svg widht="200" class="" height="200" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" id="blobSvg">
                  <defs>
                    <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" style="stop-color: rgb(60, 165, 92);"></stop>
                      <stop offset="100%" style="stop-color: rgb(181, 172, 73);"></stop>
                    </linearGradient>
                  </defs>
                  <path id="blob" d="M462.5,301Q444,352,413.5,397.5Q383,443,331,467Q279,491,232.5,454.5Q186,418,157,388Q128,358,85.5,329.5Q43,301,53.5,252.5Q64,204,95.5,172.5Q127,141,157,112Q187,83,231,62Q275,41,305.5,83Q336,125,391.5,135.5Q447,146,464,198Q481,250,462.5,301Z" fill="url(#gradient)" ></path>
                </svg>
              </span>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L18.5,154.7C36.9,149,74,139,111,138.7C147.7,139,185,149,222,176C258.5,203,295,245,332,229.3C369.2,213,406,139,443,101.3C480,64,517,64,554,80C590.8,96,628,128,665,144C701.5,160,738,160,775,160C812.3,160,849,160,886,181.3C923.1,203,960,245,997,250.7C1033.8,256,1071,224,1108,186.7C1144.6,149,1182,107,1218,96C1255.4,85,1292,107,1329,122.7C1366.2,139,1403,149,1422,154.7L1440,160L1440,0L1421.5,0C1403.1,0,1366,0,1329,0C1292.3,0,1255,0,1218,0C1181.5,0,1145,0,1108,0C1070.8,0,1034,0,997,0C960,0,923,0,886,0C849.2,0,812,0,775,0C738.5,0,702,0,665,0C627.7,0,591,0,554,0C516.9,0,480,0,443,0C406.2,0,369,0,332,0C295.4,0,258,0,222,0C184.6,0,148,0,111,0C73.8,0,37,0,18,0L0,0Z"></path></svg>
    {{-- sambuatan ketua yayasan section end --}}

    <!-- berita section start -->
    <section id="#berita" class="p-8 bg-slate-50 ">
      <div class="container">
        <div class="w-full">
          <h1 class="text-base text-center font-semibold text-primary md:text-xl">Berita</h1>
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Berita Terkini</h4>
          <div class="flex justify-center mt-2 mx-6 items-center">
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
            <h2 class="text-primary text-2xl">
              <i class="fa-regular fa-folder-open"></i>
            </h2>
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
          </div>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">
            @foreach ($berita as $item)  
            <div class="swiper-slide w-full md:w-[50%] md:p-6">
              <ul id="slider" class=" hover-group  mt-4 max-w-full ">
                <li class="mb-8   ">
                  <div class="relative card-berita shadoww rounded-md overflow-hidden bg-white">
                    <a href="/berita/{{ $item['slug'] }}" class="hover-solo relative group">
                      <img src="img/berita/{{ $item['image'] }}" width="w-full" alt=""  />
                      <div class="w-0 h-0 group-hover:w-full group-hover:h-full  absolute bg-black opacity-60 top-0 group">
                        <div class="hover-berita transition ease-in-out duration-500 py-8 sm:py-3 md:py-8 xl:py-10 mx-auto">
                          <img src="img/logo/logo_yayasan.svg" alt="" class="w-32 h-32 translate-x-4 md:translate-x-0  xl:translate-x-5" />
                        </div>
                      </div>
                    </a>
                    <div class="p-2">
                      <div class="flex items-center gap-x-px">
                        <span class="m-1"><i class="bi bi-calendar-check" style="color: #00933f;"></i></span>
                        <p class="text-primary font-['Poppins']">{{ $item['tanggal'] }}</p>
                      </div>
                    <h4 class=" text-lg font-semibold text-secondry">{{ $item['title'] }}</h4>
                  </div>
                  </div>
                </li>
              </ul>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-next NButton"></div>
          <div class="swiper-button-prev NButton"></div>
          <div class="swiper-pagination overflow-hidden "></div>
        </div>
      </div>
      </div>
    </section>
    <!-- berita section end -->

    <!-- logo section start -->
    <section id="#logo" class="w-full bg-gradient-to-r from-primary pt-10">
      <div class="container">
        <div class="w-full p-10">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-white">Menaungi Lembaga</h4>
          <p class="text-base font-medium text-center text-slate-200 my-2">Logo disetiap instansi</p>
          <div class="flex justify-center mt-4 mx-6 items-center">
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-white"></div></span>
            <div class=" w-12">
              <img src="{{ asset('img/logo/logo_yayasan.svg') }}" alt="" />
            </div>
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-white"></div></span>
          </div>
          <div class="flex flex-wrap justify-center py-10 w-full">
            @foreach ($pendidikanF as $item)
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

    {{-- pendidikan non formal section start --}}
    <section id="#pendidikan-nonformal" class="b bg-slate-50 pt-12">
      <div class="container my-20">
        <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Awwaliah Al-asiyah</h4>
        <p class="text-base font-medium text-center text-primary my-2">Pendidikan Non Formal</p>
        <div class="flex justify-center mt-4 mx-6 items-center">
          <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
          <h2 class="text-primary text-2xl">
            <i class="fa-solid fa-school"></i>
          </h2>
          <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
        </div>
        @foreach ($pendidikanNF as $index => $item)  
        <div class="flex flex-wrap px-2  {{ $index % 2 == 0 ? 'flex-row' : 'flex-row-reverse' }} ">
          <div class=" w-full self-end mt-16  lg:w-1/2">
            <div class="relative bg-cover mt-11 max-w-full lg:mt-5 lg:right-0 sm:p-10 md:p-20 lg:p-1 xl:p-16 {{  $index % 2 == 0 ? 'flex-row' : 'rotate-180' }}" style="background-image: url({{ asset('img/bg.svg') }})">
              <div class="group">
              <div class=" z-10 bottom-5 left-4  overflow-hidden rounded-md relative w-80 md:w-96 md:left-3 md:bottom-0 group-hover:scale-110 group-hover:translate-x-6 duration-300 ease-in-out transition ">
              <img src="{{ asset('img/berita/ber1.jpg') }}" alt=""  class="{{  $index % 2 == 0 ? 'flex-row' : 'rotate-180' }}"/>
             </div>
            </div>
            </div>
          </div>
          <div class="w-full self-center px-2 lg:w-1/2 my-10">
            <h1 class="text-base font-semibold text-primary md:text-xl">Sambutan Singkat<span class="block font-bold text-secondry  text-3xl sm:text-4xl mt-1 lg:text-5xl">{{ $item['title'] }}</span></h1>
            <p class="font-normal  text-secondry my-5 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque in saepe, inventore ex illo odio tenetur distinctio consequatur quam quo necessitatibus quia pariatur impedit perferendis consequuntur natus, neque voluptatibus tempore!</p>
            <a href="/pendidikan/{{ $item['slug'] }}" class="text-sm font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Selengkapnya</a>
          </div>
        </div>
        @endforeach
      
      </div>

    </section>
    {{-- pendidikan non formal section end --}}

    <!-- pendidikan formal section start -->
    <section id="#pendidikan-formal" class="w-full bg-slate-100 pt-10">
        <div class="w-full p-10">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Awwaliah Al-asiyah</h4>
          <p class="text-base font-medium text-center text-primary my-2">Pendidikan Formal</p>
          <div class="flex justify-center mt-4 mx-6 items-center">
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
            <h2 class="text-primary text-2xl">
              <i class="fa-solid fa-school"></i>
            </h2>
            <span class="mx-2"><div class="w-9 lg:w-10 h-[1px] bg-secondry"></div></span>
          </div>
          <div class="flex flex-wrap xl:flex-nowrap  xl:w-full justify-center my-10 w-full  mx-auto">
            @foreach ($pendidikanF as $item)    
            <div class="mb-8 sm:p-4 md:w-1/2 xl:w-1/3 hover:scale-110 transition-all duration-300">
              <div class="rounded-lg shadow-lg overflow-hidden bg-white bg-opacity-60 mb-4">
                <img src="img/sekolah/school.jpg" alt="" />
                <div class="mx-6 py-8">
                  <h4 class="mb-3 text-xl font-semibold font-['Viga'] text-primary">{{ $item['title'] }}</h4>
                  <p class="font-medium font-['Poppins'] text-tex mb-5">{{ $item['deskripsi'] }}</p>
                  <a href="/pendidikan/{{ $item['slug'] }}" class="text-sm font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300 hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
    </section>
    <!-- pendidikan section end -->
    
    <!-- Video section start -->
    <section id="#video" class=" bg-fixed w-full bg-cover bg-center h-[800px] md:h-[950px] lg:h-[600px] xl:h-[620px] relative" style="background-image: url('img/sekolah/school.jpg');">
      <div class="bg-black w-full h-full bg-opacity-60">
        <div class="container">
          <div class="w-full py-8">
            <div class="flex flex-wrap px-2">
              <div class="w-full self-center px-2 lg:w-1/2 my-10">
                <h1 class="text-base font-semibold text-primary md:text-xl">Video Singkat<span class="block font-bold text-white text-3xl sm:text-4xl mt-1 lg:text-3xl xl:text-5xl">Tentukan Masa depan mulai dari sekarang</span></h1>
                <p class="font-normal  text-slate-400 my-5 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque in saepe, inventore ex illo odio tenetur distinctio consequatur quam quo necessitatibus quia pariatur impedit perferendis consequuntur natus, neque voluptatibus tempore!</p>
                <a href="/pendidikan/" class="text-sm font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Selengkapnya</a>
              </div>
              <div class=" w-full self-end mt-16  lg:w-1/2">
                <div class="group md:hidden  relative">
                  <div class="animasi-pingvideo ping"></div>
                  <div class=" video-conten">
                    <span class="text-white mx-auto text-4xl ">
                      <i class="fa-solid fa-caret-right"></i>
                    </span>
                  </div>
                <div class=" z-10 bottom-5  lg:translate-x-8 scale-110 overflow-hidden rounded-lg relative w-80 md:w-96 md:left-3 md:bottom-0  ">
                <img src="{{ asset('img/berita/ber1.jpg') }}" alt=""  />
               </div>
              </div>
                <div class="relative bg-cover mt-11  hidden md:block lg:mt-5  lg:right-0 sm:p-10 md:p-20 lg:p-1 xl:p-16 " style="background-image: url({{ asset('img/b.svg') }})">
                  <div class="group relative">
                    <div class="animasi-pingvideo ping "></div>
                    <div class="video-conten">
                      <span class="text-white mx-auto text-4xl ">
                        <i class="fa-solid fa-caret-right"></i>
                      </span>
                    </div>
                  <div class=" z-10 bottom-5 translate-x-8 scale-110 overflow-hidden rounded-lg relative w-80 md:w-96 md:left-3 md:bottom-0  ">
                  <img src="{{ asset('img/berita/ber1.jpg') }}" alt=""  />
                 </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Video section end -->

@endsection 



  
