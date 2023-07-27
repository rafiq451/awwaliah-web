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
        <img src="{{ asset('img/berita/' . $dberita['image']) }}" alt="">          
      </div>
    </div>
    </div>
  </div>
</section>

    <!-- sejarah section start -->
    <section id="#sejarah" class="p-6  -mt-[27rem] sm:-mt-[22rem] md:-mt-[9rem] lg:-mt-[5rem]">
      <div class="flex -mt-3   max-w-full md:w-[50%] ">
        <div class="flex ">
          <span class="m-1"><i class="fa-regular fa-folder-open" style="color: #00933f;"></i></span>
          <h2 class="m-1 font-thin">Berita Terkini</h2>
        </div>
        <div class="mx-2 flex">
          <span class="m-1"><i class="bi bi-calendar-check" style="color: #00933f;"></i></span>
          <h2 class="m-1 font-thin">{{ $dberita['tanggal'] }}</h2>
        </div>
      </div>
      
        <div class="w-full">
          <h4 class="text-2xl font-medium font-['Poppins']  md:mt-6 lg:text-4xl lg:mt-5 text-secondry">{{ $dberita['title'] }}</h4>
          <div class="w-[20%] md:w-[10%] my-2  h-1 rounded-sm bg-tex "></div>
          <div class="flex flex-wrap  ">          
          <div class=" lg:basis-4/6 my-5  w-full shadow-lg rounded-sm ">
            <div class="p-4">
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
            </div>
            <div class="lg:basis-1/4 my-5 lg:mx-6 w-full lg:h-[50%] md:w-[80%] md:mx-auto shadow-lg rounded-sm">
              <div class="p-4">
                <h4 class="sejarah">Catagories</h4>
                <div class="my-5">
                  <p class="catagories">kejuaraan <span class="text-secondry">(1)</span></p>
                  <p class="catagories">Bencana <span class="text-secondry">(1)</span></p>
                  <p class="catagories">Sekolah <span class="text-secondry">(1)</span></p>
                </div>
                <div class="my-5">
                  <h4 class="sejarah">Recent Post</h4>
                  <div class="my-5 flex w-full ">
                    <div class="w-[30%] ">
                      <img src="{{ asset('img/1.jpg') }}" alt="">
                    </div>
                    <div class="w-[70%] mx-2">
                      <h2 class="font-semibold text-md text-primary">Kejuaraan Olimpiade</h2>
                      <p class=" font-light">20 januari, 2023</p>
                    </div>
                  </div>
                </div>
                <div class="my-5">
                  <h4 class="sejarah">Tags</h4>
                  <div class="my-5 flex flex-wrap ">
                    <div class="border border-primary mx-1 my-1 p-2">Kejuaraan</div>
                    <div class="border border-primary mx-1 my-1 p-2">Bencana</div>
                    <div class="border border-primary mx-1 my-1 p-2">creative</div>
                    <div class="border border-primary mx-1 my-1 p-2">sedekah berasama</div>
                    <div class="border border-primary mx-1 my-1 p-2">sans</div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="lg:basis-4/6 my-5  w-full shadow-lg rounded-sm">
                <div class="flex p-5">
                  <div class="basis-2/6  border border-red-400">
                    <img src="" alt="">
                  </div>
                  <div>
                    <div class="basis-5/6 mx-3">
                      <h2 class="sejarah">sans santuy</h2>
                      <div class="flex">
                        <span>    <!-- Facebook -->
                          <a
                            href="https://www.facebook.com/profile.php?id=100079187185509"
                            target="_blank"
                            class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                          >
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Facebook</title>
                              <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                              />
                            </svg>
                          </a></span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
      
      </section>
      <!-- sejarah section end -->
      
      
      @endsection 