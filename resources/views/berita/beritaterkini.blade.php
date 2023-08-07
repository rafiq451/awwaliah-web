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
      <div class="flex -mt-3  max-w-full md:w-[50%] ">
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
                <div class="md:flex p-5">
                  <div class=" md:basis-3/6 rounded-md border border-slate-300">
                    <img src="{{ asset('img/ketua yayasan.png') }}" alt="">
                  </div>
                  <div>
                    <div class="basis-5/6 mx-3 ">
                      <h2 class="sejarah mx-1">sans santuy</h2>
                      <div class="flex">
                          <!-- Facebook -->
                          <a
                            href="https://www.facebook.com/profile.php?id=100079187185509"
                            target="_blank"
                            class="w-8 h-8  mr-2 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                          >
                            <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <title>Facebook</title>
                              <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                              />
                            </svg>
                          </a>
                          <!-- Facebook -->
                          <a
                            href="https://www.facebook.com/profile.php?id=100079187185509"
                            target="_blank"
                            class="w-8 h-8  mr-2 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                          >
                          <svg role="img" width='20' class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Twitter</title><path d="M21.543 7.104c.015.211.015.423.015.636 0 6.507-4.954 14.01-14.01 14.01v-.003A13.94 13.94 0 0 1 0 19.539a9.88 9.88 0 0 0 7.287-2.041 4.93 4.93 0 0 1-4.6-3.42 4.916 4.916 0 0 0 2.223-.084A4.926 4.926 0 0 1 .96 9.167v-.062a4.887 4.887 0 0 0 2.235.616A4.928 4.928 0 0 1 1.67 3.148 13.98 13.98 0 0 0 11.82 8.292a4.929 4.929 0 0 1 8.39-4.49 9.868 9.868 0 0 0 3.128-1.196 4.941 4.941 0 0 1-2.165 2.724A9.828 9.828 0 0 0 24 4.555a10.019 10.019 0 0 1-2.457 2.549z"/></svg>
                          </a>
                          <a
                            href="https://www.facebook.com/profile.php?id=100079187185509"
                            target="_blank"
                            class="w-8 h-8  mr-2 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                          >
                          <svg role="img" width='20' class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                          </a>
                      </div>
                      <p class="my-4 text-slate-400 ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem ad adipisci, nemo perspiciatis obcaecati velit dolorum error qui necessitatibus excepturi at hic, pariatur ducimus similique beatae quaerat tempore voluptatibus labore.</p>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
      
      </section>
      <!-- sejarah section end -->
      
      
      @endsection 