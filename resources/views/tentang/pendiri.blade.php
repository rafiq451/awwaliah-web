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
    
    <!-- foto pendiri dan tokoh start -->
    <section id="#pendiri" class="p-5  ">
      <div class="container">
        <div class="w-full">
          <div class="flex flex-wrap md:flex-nowrap gap-4 lg:w-full my-10 w-full p-5 justify-center ">
            <div class="w-full mb-8 md:w-1/2 lg:w-1/4 shadow-lg ">
              <div class="conten-image overflow-hidden rounded-t-lg ">  
                <img src="{{ asset('img/rfiq.png') }}" alt="" class="conten-img  mx-auto ">
              </div>
              <div class="conten-card   bg-white p-4 flex flex-col justify-center items-center">
                
                <h2 class="text-2xl text-primary mb-2">Aang sans</h2>
                <p>Ketua Yayasan</p>
              </div>
            </div>
            <div class="w-full mb-8 md:w-1/2 lg:w-1/4 shadow-lg ">
              <div class="conten-image overflow-hidden rounded-t-lg ">  
                <img src="{{ asset('img/rfiq.png') }}" alt="" class="conten-img  mx-auto ">
              </div>
              <div class="conten-card   bg-white p-4 flex flex-col justify-center items-center">
                
                <h2 class="text-2xl text-primary mb-2">Aang sans</h2>
                <p>Ketua Yayasan</p>
              </div>
            </div>
            <div class="w-full mb-8 md:w-1/2 lg:w-1/4 shadow-lg ">
              <div class="conten-image overflow-hidden rounded-t-lg ">  
                <img src="{{ asset('img/rfiq.png') }}" alt="" class="conten-img  mx-auto ">
              </div>
              <div class="conten-card   bg-white p-4 flex flex-col justify-center items-center">
                
                <h2 class="text-2xl text-primary mb-2">Aang sans</h2>
                <p>Ketua Yayasan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- foto pendiri dan tokoh end -->

@endsection

