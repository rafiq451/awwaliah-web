@extends('layout/main')

@section('container')
 <!-- hero section start -->
    <section id="home" class=" h-[680px] w-full ">
      <div class="carousel relative overflow-hidden md:h-128">
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
         
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
            <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
            <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
          <div class="w-full">
            <img src="img/sekolah/school.jpg" alt="">          
          </div>
        </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->

    <!-- sejarah section start -->
    <section id="#sejarah" class="p-8  -mt-[25rem] sm:-mt-[23rem] md:-mt-[13rem] lg:-mt-[10rem]">
      <div class="container">
        <div class="w-full">
          <h4 class="text-center font-bold text-2xl lg:text-4xl lg:mt-5 text-secondry">Sejarah Berdirinya Yayasan</h4>
          <div class="flex justify-center mt-2 mx-6 items-center">
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
            <h2 class="text-primary text-2xl ">
              <i class="fa-regular fa-folder-open"></i>
            </h2>
            <span class="mx-2"><div class="w-7 lg:w-10 h-[1px] bg-secondry"></div></span>
          </div>
          <div class="  my-10  w-full">
            <h2 class="sejarah">Sejarah</h2>
            <p> Yayasan Pendidikan Islam Pondok Pesantren Awwaliyah Al-Asiyah mulai berdiri pada tahun 1993, 
              didirikan oleh bapak Drs. KH. Anwar Husaeni, M.Pd dan ibu Dra. Hj, Siti Hapipah HZ dengan jumlah murid
              300 santri. Pondok pesantren ini pada awalnya berada di bawah naungan Yayasan Islam Al-Asiyah yang
              berdiri pada tahun 1976. Yang didirikan oleh Bapak KH. Muhammad Hamzah (Alm) dan ibu Hj. Ratu Asiyah
              (Alm). Yang mana beliau ini adalah orang tua kandung dari ibu Hj. Siti Hapipah HZ.</p>
            <h2 class="sejarah">Kurikulum</h2>
            <p>Kurikulum Pondok Pesantren Awwaliyah Al-Asiyah berbasis Salafi yang didalamnya hanya mempelajari 
              kitab-kitab kuning seperti Al-Qur’an, Hadist, Aqidah, Fiqh, Akhlak, Nahwu, dan Sharaf. Namun sejak tahun
              2009 Ponpes Awwaliyah mengirimkan beberapa santrinya untuk mempelajari Bahasa (Arab, Inggris) dan
              metode-metode cara cepat membaca kitab kuning seperti metode Amsilati dan Tamyiz, agar hasilnya
              dapat diterapkan di Ponpes Awwaliyah walaupun pada kenyataannya menerapkan bahasa di pondok salafi
              tidak semudah yang diharapkan.</p>
              <br>
              <p>Namun demikian pendiri pondok pesantren tidak pernah berputus asa untuk memberikan materi
                pembelajaran kepada santrinya dengan harapan alumninya tidak hanya mampu dalam bidang agama tetapi
                juga memiliki ketrampilan yang dapat dimanfaatkan dalam kehidupan setelah terjun di daerah masing
                masing.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- sejarah section end -->
    
@endsection 