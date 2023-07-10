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
            <div class="w-full lg:w-[60%] lg:mx-auto ">
                <h2 class="p-8 my-10 font-bold uppercase text-secondry text-lg md:text-2xl sm:text-xl lg:text-3xl  text-center">Pendiri dan Tokoh yang Berjasa<span class="text-primary"> AWWALIYAH AL-ASIYAH</span></h2>
            </div>  
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->

      <!-- visi&misi section start -->
      <section id="#pendiri" class="p-8  ">
      <div class="container">
        <div class="w-full">
        
          <div class="  my-10  w-full">
            <h2 class="sejarah">Pendiri dan Tokoh</h2>
            <div class=" overflow-auto hidden rounded-lg shadow-lg md:block ">    
                 <table class="w-full bg-white ">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left">NO</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">1</td>
                        <td class="p-3 text-sm text-gray-700">Bapak K.H Muhammad Hamzah </td>
                        <td class="p-3 text-sm text-gray-700">Pendiri Yayasan</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">2</td>
                        <td class="p-3 text-sm text-gray-700">Ibu Hj. Ratu Asiyah</td>
                        <td class="p-3 text-sm text-gray-700">Pendiri Yayasan</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">3</td>
                        <td class="p-3 text-sm text-gray-700">Bapak Drs. K.H. Anwar Husaeni, M.Pd</td>
                        <td class="p-3 text-sm text-gray-700">Pendiri Yayasan</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">4</td>
                        <td class="p-3 text-sm text-gray-700">Ibu Dra Hj. Siti Hapipah</td>
                        <td class="p-3 text-sm text-gray-700">Pendiri Yayasan</td>
                        </tr>
                    </tbody>
               </table>
            </div>
            <div class="grid grid-cols-1 gap-4 h-96 md:hidden overflow-y-auto shadow-md ">
                <div class=" bg-gray-50 p-4 rounded-lg shadow-lg flex items-center space-x-4">
                    <div>
                        <div class="overflow-auto rounded-full w-[100px] h-[100px]"><img src="img/rfiq.png" alt=""></div>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-lg font-semibold text-primary">Bapak K.H Muhammad Hamzah</h1>
                        <p class="text-sm font-light text-secondry">Pendiri Yayasan</p>
                    </div>
                </div>
                <div class=" bg-gray-50 p-4 rounded-lg shadow-lg flex items-center space-x-4">
                    <div>
                        <div class="overflow-auto rounded-full w-[100px] h-[100px]"><img src="img/rfiq.png" alt=""></div>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-lg font-semibold text-primary">Ibu Hj. Ratu Asiyah</h1>
                        <p class="text-sm font-light text-secondry">Pendiri Yayasan</p>
                    </div>
                </div>
                <div class=" bg-gray-50 p-4 rounded-lg shadow-lg flex items-center space-x-4">
                    <div>
                        <div class="overflow-auto rounded-full w-[100px] h-[100px]"><img src="img/rfiq.png" alt=""></div>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-lg font-semibold text-primary">Bapak Drs. K.H. Anwar Husaeni, M.Pd</h1>
                        <p class="text-sm font-light text-secondry">Pendiri Yayasan</p>
                    </div>
                </div>
                <div class=" bg-gray-50 p-4 rounded-lg shadow-lg flex items-center space-x-4">
                    <div>
                        <div class="overflow-auto rounded-full w-[100px] h-[100px]"><img src="img/rfiq.png" alt=""></div>
                    </div>
                    <div>
                        <h1 class="text-md sm:text-lg font-semibold text-primary">Ibu Dra Hj. Siti Hapipah</h1>
                        <p class="text-sm font-light text-secondry">Pendiri Yayasan</p>
                    </div>
                </div>
            </div>
     
          </div>
        </div>
      </div>
    </section>
    <!-- visi&misi section end -->
    <!-- foto pendiri dan tokoh start -->
    <section id="#pendiri" class="p-5">
      <div class="container">
        <div class="w-full">
          <h2 class="sejarah">Foto Pendiri YPI Al Awwaliah</h2>
          <div class="p-2 font-inter grid grid-cols-2 gap-2  lg:grid-cols-3  xl:grid-cols-4 ">
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] md:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="#pendiri" class="p-5">
      <div class="container">
        <div class="w-full">
          <h2 class="sejarah">Tokoh Tokoh yang Berjasa</h2>
          <div class="p-2 font-inter grid grid-cols-2 gap-2  lg:grid-cols-3  xl:grid-cols-4 ">
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <div class="container hidden sm:block">
            <div class="h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div>
            <p class="mx-2 my-1 font-serif text-primary p-2 md:w-[70%] sm:text-sm rounded-br-lg border hidden sm:block">Muhammad Rafiq</p>
            </div>
            <div class=" block sm:hidden h-15 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
              <div class="w-full h-full absolute bg-cover bg-center transition-all group-hover:rotate-12 group-hover:scale-125 duration-500 group" style="background-image: url(img/1.jpg);"><div class="w-full h-full bg-black opacity-30 hidden group-hover:block transition-all duration-500 "></div></div>
            </div> 
         
        </div>
      </div>
    </section>
    <!-- foto pendiri dan tokoh end -->

@endsection

