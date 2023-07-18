@extends('layout/main')

@section('container')

<!-- hero section start -->
<section id="home" class="w-full max-h-[200px]">
    <div class="max-w-full h-5 bg-kuns">
        <div class="w-full h-[0.60rem]  bg-primary"></div>
    </div>
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
    <!-- hero section end -->

      <!-- visi&misi section start -->
      <section id="#berita" class="p-8  ">
        <div class="container">
          <div class="w-full">
            {{-- <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 font-['Viga'] text-secondry">Berita Terkini</h4>
            <div class="flex justify-center mt-2 mx-6 items-center">
              <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
              <h2 class="text-primary text-2xl">
                <i class="fa-regular fa-folder-open"></i>
              </h2>
              <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
            </div> --}}
            <div class="hover-group  mt-4 w-full md:flex md:flex-wrap ">
              @foreach ($beritaAll as $item)  
              <div class="mb-8 sm:p-4  md:w-1/2 lg:w-full ">
                <div class="relative rounded-md overflow-hidden flex flex-wrap ">
                  <div class="lg:basis-2/6 ">  
                  <a href="/berita/{{ $item['slug'] }}" class="hover-solo relative group">
                    <img src="img/berita/{{ $item['image'] }}" width="w-full" alt="" />
                    <div class="w-0 h-0 group-hover:w-full group-hover:h-full absolute bg-black opacity-60 top-0 right-30 group">
                      <div class="hover-berita transition ease-in-out duration-500 py-8 sm:py-3 md:py-8 xl:py-10 mx-auto">
                        <img src="img/logo/logo_yayasan.svg" alt="" class="w-32 h-32 lg:w-40 lg:h-40 translate-x-4 md:translate-x-0" />
                      </div>
                    </div>
                  </a>
                </div>
                  <div class=" lg:p-4 lg:basis-3/5 ">
                    <a href="/berita/{{ $item['slug'] }}">
                    <h4 class="  font-semibold text-2xl mt-2 font-['Viga'] hover:text-primary duration-200 transition-all cursor-pointer text-secondry">{{ $item['title'] }}</h4>
                    </a>
                    <div class="flex items-center gap-x-px my-2">
                        <span class="m-1"><i class="bi bi-calendar-check" style="color: #00933f;"></i></span>
                        <p class="text-primary font-['Poppins'] font-light">{{ $item['tanggal'] }}</p>
                    </div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, architecto! Dicta fugiat dignissimos quia, nulla quisquam fuga voluptatum cum minus deleniti placeat neque laborum minima, ut vitae quibusdam fugit incidunt.</p>
                </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    <!-- visi&misi section end -->

@endsection