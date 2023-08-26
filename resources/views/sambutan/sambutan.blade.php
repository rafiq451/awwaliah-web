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
      <div class="w-full md:w-[80%] mx-auto relative">
            <div class="my-5 text-center">
                <h4 class="font-medium text-primary">Ketua Yayasan</h4>
                @foreach ($sambutan as $item)
                <h1 class="text-3xl mt-5 md:text-4xl font-serif font-semibold">{{$item->nama}}</h1>
            </div>
            <div class="absolute top-32 shadow-lg  rounded-md bg-white">
                <div class="container">
                <div class="p-1 sm:p-5 mb-10">      
                <h1 class="font-semibold text-primary text-2xl mt-20 mb-5">Kata sambutan</h1>
                {!! $item->sambutan !!}
                </div>
            </div>
                @endforeach
            </div>
    </div>
    </section>
    <section class="bg-white h-[1800px] sm:h-[1000px]  lg:h-[700px] "></section>
    <!-- visi&misi section end -->
    

@endsection