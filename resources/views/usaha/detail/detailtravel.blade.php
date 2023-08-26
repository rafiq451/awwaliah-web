@extends('layout/main')
@section('container')
  <!-- hero section start -->
    <section id="home" class=" w-full ">
      <div class="carousel-inner">
        <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
          </div>
          <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
          <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
          
          <div class="w-full bg-fixed  relative  lg:h-[620px] bg-center bg-cover" style="background-image: url('{{ asset('img/10.jpg') }}')">
          <img src="{{ asset('img/10.jpg') }}" alt=""  class="lg:h-[620px] bg-fixed w-full block lg:hidden" />
          <div class=" right-0 left-0 absolute top-0 opacity-rgba w-full h-full">
            <div class="container my-12 sm:p-2 md:p-5 sm:backdrop-blur-sm">
              <div class="w-full flex justify-center my-12 text-center  flex-col h-[40%] md:h-[50%] font-[Poppins]">
                {{-- <h2 class="text-white text-xl font-medium ">Wellcome to</h2> --}}
                <h2 class="text-white text-2xl  md:text-3xl lg:text-4xl my-4 font-bold">PT <span class="bg-gradient-to-r from-primary  to-kuns bg-clip-text text-transparent">Awwaliyah </span> Bina Mandiri</h2>
               
              </div>
            </div>
          </div>
        </div>
    </section>
  <!-- hero section end -->

   {{-- about section start --}}
   <section class="relative ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="hidden sm:block -mt-[80px] sm:-mt-[150px] lg:-mt-[200px] xl:-mt-[280px]"><path fill="#fff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,202.7C672,203,768,149,864,144C960,139,1056,181,1152,208C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div class="bg-white">
      <div class="container flex flex-row p-5 flex-wrap lg:flex-nowrap">
        <div class="w-full lg:basis-1/2 p-3 mr-4">
          <h4 class="text-primary text-lg font-normal font-[Poppins] uppercase ">Tentang</h4>
          <h2 class="text-secondry text-2xl sm:text-3xl font-bold font-[Poppins] my-3">Awal adanya Travel PT Awwaliah Bina Mandiri</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non sequi incidunt facilis modi omnis? Tempora aperiam vero odio officiis qui.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis distinctio aspernatur qui accusantium dignissimos tempora. Aspernatur magni sint architecto rem quibusdam repellendus pariatur corporis. Rerum unde accusamus possimus ad ab quas modi facere recusandae voluptatem labore nisi distinctio assumenda, eum quo asperiores non natus repudiandae reiciendis tempora neque harum.</p>

       </div>
        <div class="overflow-hidden w-full md:basis-3/4 lg:basis-1/2 rounded-md my-2 shadow-lg">
          <div class="relative group ">
           <img src="{{ asset('img/2.jpg') }}" alt="" class="w-full group-hover:scale-125 duration-300 transition-all">
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- about section end --}}

  <section id="profile" class="p-5">
    <div class="my-10 md:container">
      <h4 class="text-primary text-center text-lg font-normal font-[Poppins] uppercase ">Profile</h4>
      <h2 class="text-secondry text-center text-2xl sm:text-3xl font-bold font-[Poppins] my-3">Awal adanya Travel PT Awwaliah Bina Mandiri</h2>
      <div class="p-2 my-5 font-inter grid grid-cols-2  md:grid-cols-4 ">
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden group relative">
            <div class="w-full h-full bg-cover bg-center group-hover:scale-125 transition-all duration-500" style="background-image: url({{ asset('img/2.jpg') }})">
              <div class="right-0 left-0 flex items-center justify-center absolute lg:scale-0 lg:group-hover:scale-105 transition-all duration-500 top-0 opacity-rgba w-full h-full">
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
                  <h2 class="text-white items-center font-bold font-[Poppins]">Haji sans</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


    
@endsection
