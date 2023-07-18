{{-- @dd($route) --}}

@extends('layout/main')

@section('container')
<section id="home" class=" h-[680px] w-full ">
    <div class="carousel relative overflow-hidden md:h-128 lg:h-[600px]">
      <div class="carousel-inner">
        <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
      </div>
      <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
          <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
          <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
        <div class="w-full ">
          <img src="{{ asset('img/sekolah/' . $detail['image']) }}" alt="">          
        </div>
      </div>
      </div>
    </div>
  </section>

<section id="#sejarah" class="p-8  -mt-[29rem] sm:-mt-[23rem] md:-mt-[13rem] lg:-mt-[5rem]">
    <h4 class="text-2xl font-semibold -mt-2 md:mt-6 lg:text-4xl lg:mt-5 text-secondry">{{ $detail["title"] }}</h4>
    <div class="w-[20%] md:w-[10%] my-4  h-1 rounded-sm bg-tex"></div>   
    <div class="flex flex-wrap  "> 
        <div class="card-profil " style="background-image: url({{ asset('img/cardlog/1.webp') }})">
            <div class="p-6 w-full text-center">
                <div class="w-40 h-40 mx-auto mb-4"><img src="{{ asset( 'img/logo/'. $detail['logo']) }}" alt="" /></div>
                <h2 class="text-2xl mb-5 my-4 font-semibold font-[Poppins] text-secondry ">{{ $detail['title'] }}</h2>
                <a href="/pendidikan/{{ $detail['slug'] }}" class="text-sm  font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">keluar</a>
            </div>
        </div>    
        <div class="w-full p-4 lg:w-[60%] border lg:mx-4 my-4 bg-white rounded-md shadow-lg ">
            <h2 class="sejarah">Sejarah</h2>
        </div>
           
    </div>  
</section>
    
@endsection