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
            <div class="w-full lg:w-[50%] lg:mx-auto ">
                <h2 class="p-8 my-10 font-bold uppercase text-secondry text-lg md:text-2xl sm:text-xl lg:text-3xl  text-center">Kepengurusan Yayasan<span class="text-primary"> AWWALIYAH AL-ASIYAH</span></h2>
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
        <div  class="w-full">
          <div class="  my-10  w-full">
            <div class="mb-5">
            <h2 class="sejarah">Pembina</h2>
            <div class=" overflow-auto rounded-lg shadow-lg  ">   
            @foreach ($kepengurusan as $item)
                <table class="w-full bg-white ">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">{{$item->nama}}</td>
                        <td class="p-3 text-sm text-gray-700">{{$item->jabatan}}</td>
                        </tr>
                    </tbody>
              </table>
            @endforeach 
            </div>
            </div>
            <div class="mb-5">
            <h2 class="sejarah">Pembina</h2>
            <div class=" overflow-auto rounded-lg shadow-lg  ">    
                 <table class="w-full bg-white ">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Prof. Dr. Jimly Asshiddiqie, SH</td>
                        <td class="p-3 text-sm text-gray-700">Indianapoli</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Muhammad Suhadi, S.Kom</td>
                        <td class="p-3 text-sm text-gray-700">Columbus</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Mas’adi Sulthani, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Drs. Rostian Syamsuddin</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Muhammad Nazif, SE, MBA.</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700"> Dr. Muhammad Anwar Ratnaprawira, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                    
                    </tbody>
               </table>
            </div>
            </div>
            <div class="mb-5">
            <h2 class="sejarah">Pembina</h2>
            <div class=" overflow-auto rounded-lg shadow-lg  ">    
                 <table class="w-full bg-white ">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Prof. Dr. Jimly Asshiddiqie, SH</td>
                        <td class="p-3 text-sm text-gray-700">Indianapoli</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Muhammad Suhadi, S.Kom</td>
                        <td class="p-3 text-sm text-gray-700">Columbus</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Mas’adi Sulthani, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Drs. Rostian Syamsuddin</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Muhammad Nazif, SE, MBA.</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700"> Dr. Muhammad Anwar Ratnaprawira, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                    
                    </tbody>
               </table>
            </div>
            </div>
            <div class="mb-5">
            <h2 class="sejarah">Pembina</h2>
            <div class=" overflow-auto rounded-lg shadow-lg  ">    
                 <table class="w-full bg-white ">
                    <thead class="bg-gray-50 border-b-2 border-gray-200">
                        <tr>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Nama</th>
                        <th class="p-3 text-sm font-semibold tracking-wide text-left ">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Prof. Dr. Jimly Asshiddiqie, SH</td>
                        <td class="p-3 text-sm text-gray-700">Indianapoli</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Muhammad Suhadi, S.Kom</td>
                        <td class="p-3 text-sm text-gray-700">Columbus</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Mas’adi Sulthani, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700">Drs. Rostian Syamsuddin</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-white">
                        <td class="p-3 text-sm text-gray-700">Drs. Muhammad Nazif, SE, MBA.</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                        <tr class="bg-gray-50">
                        <td class="p-3 text-sm text-gray-700"> Dr. Muhammad Anwar Ratnaprawira, MA</td>
                        <td class="p-3 text-sm text-gray-700">Detroit</td>
                        </tr>
                    
                    </tbody>
               </table>
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
        
        </div>
      </div>
    </section>
    <section id="#pendiri" class="p-5">
      <div class="container">
        <div class="w-full">
          <h2 class="sejarah">Tokoh Tokoh yang Berjasa</h2>
         
         
        </div>
      </div>
    </section>
    <!-- foto pendiri dan tokoh end -->

@endsection

