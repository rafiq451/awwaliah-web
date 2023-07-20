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
          <div class=" lg:basis-4/6 my-5  w-full shadow-lg rounded-md border  border-primary">
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
            <div class="lg:basis-1/4 my-5 lg:mx-6   shadow-lg rounded-md border  border-primary">
              <div>halo</div>
            </div>
            </div>
          </div>
      
      </section>
      <!-- sejarah section end -->
      
      
      @endsection 