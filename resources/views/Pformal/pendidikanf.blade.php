{{-- @dd($detail) --}}
@extends('layout/main')

@section('container')
 <!-- hero section start -->
    <section id="home" class=" h-[680px] w-full ">
      <div class="carousel relative overflow-hidden md:h-128 lg:h-[600px]">
      
        <div class="carousel-inner">
          <div class="carousel-item bg-cover bg-center hidden h-56 sm:h-72 md:h-full w-full transition-opacity duration-1000 ease-in-out" style="background-image: url('img/1.jpg');"></div>
        </div>
        <div class="carousel-nav absolute -top-[200px] sm:-top-[150px] md:-top-[20px] left-0 right-0 bottom-0 flex justify-between items-center p-2">
            <button id="prevBtn" class="hidden carousel-prev px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-left"></i></button>
            <button id="nextBtn" class=" hidden carousel-next px-3 py-2 bg-gray-800 text-white rounded-full focus:outline-none"><i class="bi bi-arrow-right"></i></button>
            
          <div class="w-full">
            <div class="relative ">
            <a href="#" class="relative">
              <img src="{{ asset('img/sekolah/' . $formal['image']) }}" alt=""  class="" />
              <div class=" absolute top-0 opacity-rgba w-full flex items-center h-full">
                <div class="flex flex-wrap items-center w-full h-full md:h-60  ">
                  <div class="w-[100%] hidden md:block md:mx-10 ">
                  <h1 class="text-white text-center uppercase text-2xl">MAS Aliyah Al-Asiyah</h1>
                  </div>
                    <div class="bg-cover mx-auto text-white bg-center h-20 w-20 md:w-40 md:h-40 "  style="background-image: url({{ asset('img/blobs.png') }})">
                    <h1 class=" text-center text-4xl my-6 md:my-16 md:text-5xl">A</h1>
                  </div> 
                </div>
              </div>
            </a>
          </div>
          </div>
        </div>
        </div>
    </section>
    <!-- hero section end -->

    <!-- sejarah section start -->
    <section id="#sejarah" class="p-8  -mt-[29rem] sm:-mt-[23rem] md:-mt-[13rem] lg:-mt-[5rem] bg-white">
        <h4 class="text-2xl font-semibold -mt-2 md:mt-6 lg:text-4xl lg:mt-5 text-secondry">{{ $formal["title"] }}</h4>
        <div class="w-[20%] md:w-[10%] my-4  h-1 rounded-sm bg-tex"></div>   
        <div class="flex flex-wrap  ">
          <div class="w-full block lg:hidden ">
            <div class=" card-profil " style="background-image: url({{ asset('img/cardlog/1.webp') }})">
              <div class="p-6 w-full text-center">
                <div class="w-44 h-44 mx-auto"><img src="{{ asset( 'img/logo/'. $formal['logo']) }}" alt="" class="tw-44 h-44"/></div>
                <h2 class="text-2xl mb-5
                 font-semibold font-[Poppins] text-secondry ">{{ $formal['title'] }}</h2>
                <a href="/detail/{{ $formal['slug'] }}" class="text-sm  font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Profil</a>
              </div>
            </div> 
            <div class="card-makna border border-red-500" >
              <div class="p-6 w-full">
                <h1 class="text-primary text-2xl font-semibold text-center">Filosofi Logo</h1>
                <div class=" sm:p-5 mb-10">
                  <div class="w-full">
                      <h2 class="font-bold text-xl text-tex uppercase my-4">Makna Bentuk</h2>
                      <ol class="list-decimal list-decimal-lg mr-2">
                        <li>
                          <p><span class="uppercase">gerigi</span> 5 (lima) keatas adalah rukun Islam.</p>
                          <br/>
                        </li>
                        <li>
                          <p><span class="uppercase">gerigi</span> 5 (lima) kebawah adalah dasar Pancasila.</p>
                          <br/>
                        </li>
                      </ol>
                     </div>
                     <div class="w-full">
                      <h2 class="font-bold text-xl text-tex uppercase my-4">Makna Warna</h2>
                      <ol class="list-decimal list-decimal-lg mr-2">
                        <li>
                          <p><span class="uppercase">Warna hijau</span> melambangkan kesuburan dan kemakmuran.</p>
                          <br/>
                        </li>
                        <li>
                          <p><span class="uppercase">warna putih</span> adalah lambang kesucian.</p>
                          <br/>
                        </li>
                        <li>
                          <p>lingkaran bulat <span class="uppercase">berwarna kuning</span> mas dengan bertuliskan nama yayasan Awwaliyah  Al Asiyah melambangkan  matahari yang bersinar terang ,menghangatkan dan menyemangati kehidupan.</p>
                          <br/>
                        </li>
                      </ol>
                     </div>
                </div>
              </div>
              
            </div>  
          </div>        
        <div class="w-full p-4 lg:w-[60%] border lg:mx-4 my-4 bg-white rounded-md shadow-lg ">
            <h2 class="sejarah">Sejarah</h2>
            <p> SMP Plus awwaliyah al-asiyah berdiri pada tahun 2004 ketika pondok pesantren Awwaliyah yang sudah lebih awal berdiri di tahun 1993. Dimana santri-santrinya pada waktu itu masih sekolah keluar, ada yang di SMP Negeri, SMA Negeri, Madrasah Aliyah Negeri (MAN), MTS Al-Asiyah dan ada juga yang di SMK selain yang bersekolah, ada juga yang bekerja.</p>
            <br>
            <p> Sejak tahun 1993 semua Santri diberikan kebebasan untuk memilih sekolah yang mereka inginkan. Akan tetapi karena banyak masukan dan permohonan dari Wali santri yang ingin anaknya agar mondok dan sekolah di tempat yang sama, sehingga tidak harus keluar dari lingkungan Pondok, karena memang rawan. Apalagi santri perempuan di mana mereka harus naik kendaraan umum, begitupun pulangnya yang tidak terpantau jam berapa mereka sebenarnya pulang dari sekolah.</p>
              <br>
            <p>Namun demikian pendiri pondok pesantren tidak pernah berputus asa untuk memberikan materi
            pembelajaran kepada santrinya dengan harapan alumninya tidak hanya mampu dalam bidang agama tetapi
            juga memiliki ketrampilan yang dapat dimanfaatkan dalam kehidupan setelah terjun di daerah masing
            masing.</p>
            <br>
            <p>Maka tahun 2004 ibu Dra. Hj. Siti Hapipah HZ beserta bapak Drs. Kh. Anwar Husaeni, M.Pd mendirikan lah sekolah SMP Plus Awwaliyah Al-Asiyah. Alhamdulillah ketika awal pendaftaran tahun itu SMP Plus mendapatkan siswa sebanyak 43 orang. Alhamdulillah Wa syukurillah dengan berjalannya waktu siswa/siswi SMP Plus Awwaliyah Al-Asiyah bertambah dan ini juga mengakibatkan santri di pondok pesantren Awwaliyah Al-Asiyah pun bertambah.</p>
            <p> Karena santri di pondok pesantren Awwaliyah ini dari awal berdirinya tidak pernah lebih dari 40 Santri. Ketika sudah ada SMP Plus Awwaliyah Alhamdulillah santrinya semakin banyak dan dengan berjalannya waktu siswa/siswi SMP plus awwaliyah sampai hari ini mencapai 13 kelas atau 13 rombel dengan jumlah siswa hampir mencapai 400 orang.Jadi itulah awal berdirinya SMP Plus Awwaliyah ini di upayakan memang untuk menunjang kemajuan pondok pesantren dan juga untuk melaksanakan keinginan dari Wali santri yang mengharapkan pondok dan sekolah di tempat yang sama.</p>
            <br>
            <p>Hubungan SMP Plus Awwaliyah denga Yayasan Pendidikan Islam Al-Asiyah
                Awal berdirinya SMP Plus Awwaliyah Al-Asiyah (2004) itu menginduk di bawah naungan Yayasan Pendidikan Islam Al-Asiyah yang ada di Cibinong sampai tahun 2015. Hingga akhirnya Pondok Pesantren Awwaliyah Al-Asiyah mendirikan sebuah yayasan sendiri yang bernama YAYASAN AWWALIYAH AL-ASIYAH yang didalamnya menaungi PONPES Awwaliyah, SDIT, SMP Plus, MA Al-Asiyah, Majlis Ta’lim, Travel Haji serta Umroh dan juga bergabungnya RA Al-Asiyah ke bawah naungan Yayasan Awwaliyah Al-Asiyah. maka secara resmi pada tahun 2015 SMP Plus keluar dari Yayasan Pendidikan Islam Al-Asiyah Cibinong. 
                </p>
             <br>
             <p>Nilai plus kenapa ke awwaliyah
                Untuk Nilai plus yang ada di sekolah SMP Plus Awwaliyah ini karena selain menggunakan kurikulum 2013 dan insya Allah kedepannya akan menggunakan kurikulum Merdek, nilai tambah yang ada di sekolah ini adalah di dalamnya diajarkan juga pelajaran-pelajaran agama yang hampir sama dengan Madrasah Tsanawiyah seperti pelajaran bahasa Arab, pelajaran Al-Qur’an Hadits, Fiqih Aqidah, BTQ dan tahfidz. Serta kita selalu melaksanakan salat Dhuha bersama, salat Dzuhur berjamaah dan diupayakan agar tamatan dari SMP Plus Awwaliyah ini dapat membaca Al-Qur’an secara lancar juga hafal juz 30, surah-surah pilihan seperti Yasin, Waqiah, Al-Mulk dan lain sebagainya.
                </p>
                <br>
                <p>Disamping memang SMP Plus ini diharapkan dapat membantu pondok pesantren. SMP Plus Awwaliyah ini memiliki Visi dan Misi serta tekad agar SMP ini memiliki ciri khas dan keunggulan di bandingkan dengan SMP lain nya dengan berbagai kegiatan Extrakurikuler nya seperti Futsal, Marching Band, Paskibra, Pramuka, Silat, Hadroh, Marawis. Guru-guru yang profesional di bidangnya agar kedepannya menjadi SMP Plus yang selalu diminati oleh masyarakat.</p>   
         
        </div>
        <div class=" lg:w-[35%] hidden lg:block">
          <div class="card-profil " style="background-image: url({{ asset('img/cardlog/1.webp') }})">
            <div class="p-6 w-full text-center">
              <div class="w-44 h-44 mx-auto"><img src="{{ asset( 'img/logo/'. $formal['logo']) }}" alt="" class="w-44 h-44"/></div>
              <h2 class="text-2xl mb-5 font-semibold font-[Poppins] text-secondry ">{{ $formal['title'] }}</h2>
              <a href="/detail/{{ $formal['slug'] }}" class="text-sm  font-medium font-['Poppins'] duration-200 transition-all hover:bg-yellow-300  hover:text-slate-200 text-white bg-gradient-to-r from-primary  to-kuns px-4 py-2 rounded-lg">Lihat Profil</a>
            </div>
          </div>   
          
          {{-- makna logo start --}}
          <div class="card-makna border border-primary" >
            <div class="p-6 w-full">
              <h1 class="text-primary text-2xl font-semibold text-center">Filosofi Logo</h1>
              <div class=" sm:p-5 mb-10">
                <div class="w-full">
                    <h2 class="font-bold text-xl text-tex uppercase my-4">Makna Bentuk</h2>
                    <ol class="list-decimal list-decimal-lg mr-2">
                      <li>
                        <p><span class="uppercase">gerigi</span> 5 (lima) keatas adalah rukun Islam.</p>
                        <br/>
                      </li>
                      <li>
                        <p><span class="uppercase">gerigi</span> 5 (lima) kebawah adalah dasar Pancasila.</p>
                        <br/>
                      </li>
                    </ol>
                   </div>
                   <div class="w-full">
                    <h2 class="font-bold text-xl text-tex uppercase my-4">Makna Warna</h2>
                    <ol class="list-decimal list-decimal-lg mr-2">
                      <li>
                        <p><span class="uppercase">Warna hijau</span> melambangkan kesuburan dan kemakmuran.</p>
                        <br/>
                      </li>
                      <li>
                        <p><span class="uppercase">warna putih</span> adalah lambang kesucian.</p>
                        <br/>
                      </li>
                      <li>
                        <p>lingkaran bulat <span class="uppercase">berwarna kuning</span> mas dengan bertuliskan nama yayasan Awwaliyah  Al Asiyah melambangkan  matahari yang bersinar terang ,menghangatkan dan menyemangati kehidupan.</p>
                        <br/>
                      </li>
                    </ol>
                   </div>
              </div>
            </div>
            
          </div>    
          {{-- makna logo start --}}
        </div>
      </div>
        <div class="w-full bg-white lg:mx-4 lg:w-[60%] p-5 my-4 rounded-md shadow-lg">
            <h4 class="text-center text-xl lg:text-2xl font-semibold ">Visi & Misi</h4>
            <div class="my-10">
                <h2 class=" text-xl my-2 lg:text-2xl text-primary">Visi</h2>
                <div class="flex  justify-start">
                    <div class="mr-2"><div class="w-2 h-6 bg-primary"></div></div>
                    <div class="w-full">
                        <p class=" uppercase">Terwujudnya peserta didik Unggul dalam Ilmu Pengetahuan dan berkarakter Islam</p>
                    </div>
                </div>
                <br>
                <h2 class="text-xl my-2 lg:text-2xl text-primary">Misi</h2>
                <div class="w-full">
                    <ol class="list-decimal list-decimal-lg  p-5 mr-3">
                      <li>
                        <p>Menyelenggarakan pendidikan pra sekolah berdasarkan al-Qur’an dan al-Hadits, dengan cara membantu anak tumbuh dan berkembang sesuai dengan potensi dan karakteristik perkembangan fisik dan sosial anak.</p>
                        <br/>
                      </li>
                      <li>
                        <p>Meningkatkan kemampuan guru pada anak usia dini, sehingga memiliki kompetensi profesional dan kepribadian yang matang dan mengembangkan kreatifitas pada anak sedini mungkin.</p>
                        <br/>
                      </li>
                      <li>
                        <p>Meningkatkan pengertian kepada masyarakat bahwa anak adalah individu yang memiliki keunikan tersendiri dalam proses tumbuh kembangnya.</p>
                        <br>
                      </li>
                      <li>
                        <p>Meningkatkan peran serta masyarakat dalam menciptakan lingkungan yang sehat, bersih dan nyaman dalam menunjang kegiatan belajar mengajar. meningkatkan kesadaran masyarakat mengenai pentingnya program wajib belajar.</p>
                        <br>
                      </li>
                    </ol>
                   </div>
              </div>
              <div class="w-full">
                  <h4 class="text-center text-xl lg:text-2xl font-semibold ">Tujuan</h4>
                  <div class="my-10">
                    <ol class="list-disc list-disc-lg  p-5 mr-3">
                      <li>
                        <p>Peningkatan kemampuan siswa dalam bidang keagamaan, olahraga, seni, dan peningkatan kemampuan dalam bidang teknologi ilmu pengetahuan dan teknolodi (IPTEK)</p>
                        <br/>
                      </li>
                      <li>
                        <p>Peningkatan mutu akademik dan peningkatan rata-rata nilai rapot.</p>
                        <br/>
                      </li>
                      <li>
                        <p>Terwujudnya kehidupan sekolah yang lebih agamis dan berakhlakul karimah.</p>
                        <br>
                      </li>
                      <li>
                        <p>Terwujudnya lingkungan sekolah yang bersih, aman, nyaman dan kondusif untuk belajar.</p>
                        <br>
                      </li>
                      <li>
                        <p>Peningkatan kelengkapan saran dan prasarana mewujudkan keadaan sekolah yang memadai.</p>
                        <br>
                      </li>
                      <li>
                        <p>Peningkatan kegiatan ekstrakulikuler yang efektif, efesien, dan berguna untuk menumbuhkembangkan potensi diri siswa.</p>
                        <br>
                      </li>
                      <li>
                        <p>Terwujudnya hubungan yang harmonis dan dinamis antar warga sekolah dan masyarakat</p>
                        <br>
                      </li>
                    </ol>
                  </div>
                  </div>
              </div>
          </section>
    <!-- sejarah section end -->

  


    {{-- dewan guru section start --}}
    <section id="dewan-guru" class="">
      <div class="w-full  mx-auto ">
        <div class="mt-10">
          <h2 class="text-center text-2xl md:text-4xl font-[Poppins] text-primary font-bold mb-3">Dewan Guru</h2>
          <p class="text-center font-medium text-slate-500">Kepala sekolah beserta Staf-stafnya</p>
        </div>
      <div class=" slide-container swiper ">
        <div class=" slide-content">
          <div class="card-wrapper swiper-wrapper ">
          {{-- @foreach ($collection as $item) --}}
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal text-slate-500">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            <div class="card shadow-lg swiper-slide ">
              <div class="img-content  ">
                <span class="overlay  "></span>
                <div class="card-image">
                  <img src="{{ asset('img/ketua yayasan.png') }}" alt="" class="card-img ">
                </div>
              </div>
              <div class="card-content mb-4 ">
                <h2 class="name font-semibold sm:text-base md:text-lg lg:text-base font-['Poppins'] text-secondry">Drs. Kh. Anwar Husaeni, M.Pd</h2>
                <p class="jabatan font-normal">Ketua yayasan</p>
              </div>
            </div>
            {{-- @endforeach --}}
          </div>
        </div>
        <div class="swiper-button-next NButton "></div>
       <div class="swiper-button-prev  NButton"></div>
       <div class="swiper-pagination "></div>
       
      </div>
      </div>
    </section>
    {{-- dewan guru section end --}}

    {{-- extrakulikuler start --}}
    <section id="extrakurikuler" class="p-10 bg-white">
      <div class="container">
        <div class="w-full">

          <h2 class="text-center text-2xl md:text-4xl font-[Poppins] text-primary font-bold mb-3">Extrakurikuler </h2>
          <p class="text-center font-medium text-slate-500">Aktivitas Diluar kurikulum</p>
            <div class="flex flex-wrap xl:flex-nowrap  xl:w-full justify-center  w-full  mx-auto my-4 ">
              {{-- @foreach ($collection as $item) --}}
            <div  class="mb-4 md:mb-0 sm:p-4 md:w-1/2 lg:w-1/3 ">
              <div class="relative w-full overflow-hidden group">
              <div class="w-full">
                <img src="{{ asset('img/berita/ber1.jpg') }}" alt="" class="group-hover:scale-125 transition-all duration-500">
              </div>
              <div class="hidden group-hover:block absolute top-0 opacity-white  group-hover:w-full  group-hover:h-full  transition-all duration-200">
                <div class="w-full h-full flex justify-center flex-col items-center ">
                  <div>
                    <h2 class=" text-2xl text-primary font-semibold">Futsal</h2>
                  </div>
                  <div class="my-2">
                    <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
                      Lihat
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div  class="mb-4 md:mb-0 sm:p-4 md:w-1/2 lg:w-1/3 ">
              <div class="relative w-full overflow-hidden group">
              <div class="w-full">
                <img src="{{ asset('img/berita/ber1.jpg') }}" alt="" class="group-hover:scale-125 transition-all duration-500">
              </div>
              <div class="hidden group-hover:block absolute top-0 opacity-white  group-hover:w-full  group-hover:h-full  transition-all duration-200">
                <div class="w-full flex flex-col items-center">
                  <h2 class="mt-10 text-2xl text-primary font-semibold">Title</h2>
                  <div><span>logs</span></div>
                </div>
              </div>
            </div>
          </div>
          <div  class="mb-4 md:mb-0 sm:p-4 md:w-1/2 lg:w-1/3 ">
            <div class="relative w-full overflow-hidden group">
              <div class="w-full">
                <img src="{{ asset('img/berita/ber1.jpg') }}" alt="" class="group-hover:scale-125 transition-all duration-500">
              </div>
              <div class="hidden group-hover:block absolute top-0 opacity-white  group-hover:w-full  group-hover:h-full  transition-all duration-200">
                <div class="w-full flex flex-col items-center">
                  <h2 class="mt-10 text-2xl text-primary font-semibold">Title</h2>
                  <div><span>logs</span></div>
                </div>
              </div>
            </div>
          </div>
          {{-- @endforeach --}}
        </div>
      </div>
      </div>
    </section>

    <!-- Modal -->
<div id="modal" class="hidden fixed inset-0 z-[9999]  items-center justify-center bg-black bg-opacity-50">
  <div class="w-full max-w-2xl p-4 mx-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex flex-col items-start justify-between p-4 border-b dark:border-gray-600">
            <img src="{{ asset('img/berita/ber1.jpg') }}" alt="">
              <h3 class="text-xl mt-2 font-semibold text-gray-900 dark:text-white">
                  Static modal
              </h3>
             
          </div>
          <!-- Modal body -->
          <div class="p-3 space-y-6">
              <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                  With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
              </p>
             
          </div>
          <!-- Modal footer -->
          <div class="flex items-center p-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
              <button id="closeModalButton" class="mt-4 bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                  Close
              </button>
          </div>
      </div>
  </div>
</div>

    
    {{-- extrakulikuler end --}}

@endsection 
