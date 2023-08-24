@extends('layout/main')

@section('container')
 <!-- hero section start -->
 <section id="home" class=" w-full ">
      <div class="carousel-inner">
        <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
      </div>
          <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
          <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
          
          <div class="w-full bg-fixed  relative  lg:h-[620px] bg-center bg-cover" style="background-image: url('img/10.jpg')">
            <img src="{{ asset('img/10.jpg') }}" alt=""  class="lg:h-[620px] bg-fixed w-full block lg:hidden" />
            <div class=" right-0 left-0 absolute top-0 opacity-rgba w-full h-full">
              <div class="container my-12 sm:p-2 md:p-5 backdrop-blur-sm">
                <div class="w-full flex justify-center my-12 text-center  flex-col h-[40%] md:h-[50%] font-[Poppins]">
                  {{-- <h2 class="text-white text-xl font-medium ">Wellcome to</h2> --}}
                  <h2 class="text-white text-2xl  md:text-3xl lg:text-4xl my-4 font-bold">PT <span class="bg-gradient-to-r from-primary  to-kuns bg-clip-text text-transparent">Awwaliyah </span> Bina Mandiri</h2>
                  <div class="lg:w-[40%] mx-auto">
                    <p class="text-slate-300 font-light text-sm md:text-base mb-3 md:mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit. </p>
                    <a href="#" class=" font-medium font-['Poppins'] duration-200 text-sm md:text-base transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-sm">Lihat Selengkapnya</a>
                  </div>
                </div>
              </div>
            </div>
        </div>
  </section>
  <section class="relative ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mt-[80px] sm:-mt-[150px] lg:-mt-[200px] xl:-mt-[280px]"><path fill="#fff" fill-opacity="1" d="M0,224L48,202.7C96,181,192,139,288,144C384,149,480,203,576,202.7C672,203,768,149,864,144C960,139,1056,181,1152,208C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
   <div class="bg-white">
    <div class="container flex flex-row p-5 flex-wrap lg:flex-nowrap">
      <div class="w-full lg:basis-1/2 p-3 mr-4">
        <h4 class="text-primary text-lg font-normal font-[Poppins] uppercase ">Tentang</h4>
        <h2 class="text-secondry text-3xl font-bold font-[Poppins] my-3">Awal adanya Travel PT Awwaliah Bina Mandiri</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non sequi incidunt facilis modi omnis? Tempora aperiam vero odio officiis qui.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum blanditiis distinctio aspernatur qui accusantium dignissimos tempora. Aspernatur magni sint architecto rem quibusdam repellendus pariatur corporis. Rerum unde accusamus possimus ad ab quas modi facere recusandae voluptatem labore nisi distinctio assumenda, eum quo asperiores non natus repudiandae reiciendis tempora neque harum.</p>

      </div>
      <div class="overflow-hidden w-full md:basis-3/4 lg:basis-1/2 rounded-md my-2">
        <div class="relative group ">
          <img src="{{ asset('img/2.jpg') }}" alt="" class="w-full group-hover:scale-125 duration-300 transition-all">
        </div>
      </div>
    </div>
   </div>
  </section>



  <section id="layanan" class="p-5 lg:p-10 bg-white">
    <div class=" my-10">
      <div class="w-full">
        <h4 class="text-primary text-lg font-normal font-[Poppins] uppercase text-center">Layanan</h4>
        <div class="lg:w-[50%] container  mx-auto">
          <h2 class="text-secondry text-3xl font-bold font-[Poppins] my-3 text-center">Kami menyediakan layanan yang dapat membantu anda</h2>
        </div>
        <div class="flex flex-wrap justify-center lg:flex-nowrap my-10 p-4 ">
          <div class="card-travel md:w-[40%] lg:basis-1/3 group ">
            <div class="relative z-10">
              <span class="text-5xl mx-auto text-primary "><i class="fa-solid fa-hand-holding-dollar"></i></span>
              <h4 class="text-xl  my-3 font-semibold text-secondry font-[Poppins] group-hover:text-white">Garansi Harga Terendah</h4>
              <p class="group-hover:text-slate-100">Kami menawarkan jaminan kepada pelancong bahwa mereka akan mendapatkan harga terendah untuk tiket pesawat, akomodasi, atau paket liburan yang mereka pesan.</p>
            </div>
            <div class="absolute  -bottom-[97%] right-0 bg-gradient-to-r from-primary duration-300 transition-all to-kuns w-full h-full group-hover:-bottom-[0%]"></div>
          </div>
          <div class="card-travel my-5 md:my-0 md:mx-5 group md:w-[40%] lg:basis-1/3">
            <div class="relative z-10">
             <span class="text-5xl mx-auto text-primary"><i class="fa-solid fa-clock"></i></span>
             <h4 class="text-xl  my-3 font-semibold text-secondry font-[Poppins] group-hover:text-white">Notifikasi Perubahan Jadwal</h4>
             <p class="group-hover:text-slate-100">Kami memberikan pemberitahuan real-time kepada pelancong tentang perubahan jadwal penerbangan, gate keberangkatan, atau akomodasi.</p>
            </div>
            <div class="absolute  -bottom-[97%] right-0 bg-gradient-to-r from-primary duration-300 transition-all to-kuns w-full h-full group-hover:-bottom-[0%]"></div>
          </div>
          <div class="card-travel md:w-[40%] md:my-5 lg:my-0 lg:basis-1/3 group ">
            <div class="relative z-10">
              <span class="text-5xl mx-auto text-primary"><i class="fa-solid fa-user-clock"></i></span>
              <h4 class="text-xl  my-3 font-semibold text-secondry font-[Poppins] group-hover:text-white"> Pelayanan Pelanggan 24/7</h4>
              <p class="group-hover:text-slate-100">Kami menyediakan dukungan pelanggan sepanjang waktu, 24 jam sehari dan 7 hari seminggu.</p>
            </div>
             <div class="absolute  -bottom-[97%] right-0 bg-gradient-to-r from-primary duration-300 transition-all to-kuns w-full h-full group-hover:-bottom-[0%]"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
      <!-- hero section end -->
  <section id="travel-content" class=" bg-cover bg-center " style="background-image: url('img/10.jpg')">
    <div class="w-full h-full flex items-center opacity-white backdrop-blur-sm p-5">
      <div class="container">
      <div class="conten p-4 flex justify-center flex-wrap lg:flex-nowrap  h-full items-center">
        <div class=" card-trav w-full p-2 sm:p-4 mr-4 md:mr-0 lg:basis-1/3">
          {{-- <img src="{{ asset('img/1.jpg') }}" alt="" class="w-full"> --}}
          <div class="bg-cover bg-center h-full w-full p-5" style="background-image: url('img/1.jpg')">
            halo
          </div>
        </div>
        <div class="card-trav w-full p-2 sm:p-4 mr-4 md:mr-0 lg:basis-1/3">
          <img src="{{ asset('img/1.jpg') }}" alt="" class="w-full">
        </div>
        <div class="card-trav w-full p-2 sm:p-4 mr-4 md:mr-0 lg:basis-1/3">
          <img src="{{ asset('img/1.jpg') }}" alt="" class="w-full">
        </div>
      </div>
      </div>
    </div>
  </div>
  </section>




    
@endsection
