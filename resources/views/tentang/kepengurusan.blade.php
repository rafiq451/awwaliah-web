@extends('layout/main')

@section('container')

 <!-- hero section start -->
 <section id="home" class=" w-full ">
  <div class="max-w-full h-5 bg-kuns">
    <div class="w-full h-[0.60rem]  bg-primary"></div>
</div>
    <div class="carousel-inner">
      <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
    </div>
        <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
        <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
        
        <div class="w-full bg-fixed  relative  lg:h-[620px] bg-center bg-cover" style="background-image: url('img/sekolah/school.jpg')">
          <img src="{{ asset('img/sekolah/school.jpg') }}" alt=""  class="lg:h-[620px] bg-fixed w-full block lg:hidden" />
          <div class=" right-0 left-0 absolute top-0 opacity-rgba w-full h-full">
            <div class="container my-12 sm:p-2 md:p-5 backdrop-blur-sm">
              <div class="w-full flex justify-center my-12 text-center  flex-col h-[40%] md:h-[50%] font-[Poppins]">
                <h2 class="text-white text-2xl  md:text-3xl lg:text-4xl my-4 font-bold">Kepengurusan Yayasan<span class="bg-gradient-to-r from-primary  to-kuns bg-clip-text text-transparent"> Awwaliah Al-Asiyah</span></h2>
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
      <div class="relative">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mt-[90px] sm:-mt-[150px] lg:-mt-[200px] xl:-mt-[280px] "><path fill="#fff" fill-opacity="1" d="M0,256L40,256C80,256,160,256,240,224C320,192,400,128,480,117.3C560,107,640,149,720,176C800,203,880,213,960,186.7C1040,160,1120,96,1200,96C1280,96,1360,160,1400,192L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        <section id="#pendiri" class="p-8 bg-white ">
          <div class="container">
            <div  class="w-full">
              <div class="  my-10  w-full">
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
      </div>
   
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

