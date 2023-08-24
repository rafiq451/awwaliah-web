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
                <h2 class="text-white text-2xl  md:text-3xl lg:text-4xl my-4 font-bold">Identitas Yayasan<span class="bg-gradient-to-r from-primary  to-kuns bg-clip-text text-transparent"> Awwaliah Al-Asiyah</span></h2>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- hero section end -->
    
    <!-- foto pendiri dan tokoh start -->
    <div class="relative">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="-mt-[90px] sm:-mt-[150px] lg:-mt-[200px] xl:-mt-[280px]"><path fill="#bbf7d0" fill-opacity="1" d="M0,96L34.3,117.3C68.6,139,137,181,206,208C274.3,235,343,245,411,218.7C480,192,549,128,617,96C685.7,64,754,64,823,101.3C891.4,139,960,213,1029,213.3C1097.1,213,1166,139,1234,106.7C1302.9,75,1371,85,1406,90.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    
    <section id="#pendiri" class="p-8 h-[300px] bg-green-200 ">
       <div class="w-full md:w-[80%] mx-auto relative">
        <div class="my-5 text-center">
            <h4 class="font-medium text-primary">Mars</h4>
            <h1 class="text-3xl mt-5 md:text-4xl  font-semibold font-[Poppins]">Awwaliah Al-Asiyah</h1>
        </div>
        <div class="absolute top-32 z-10 shadow-lg  rounded-md bg-white">
            <div class="container">
            <div class="p-1 sm:p-5 mb-10">      
            <h1 class="font-semibold text-primary text-2xl mt-20 mb-5">Kata sambutan</h1>
            <p> Bismillahirrahmanirrahiim..
                Assalamualaikum warrahmatullahi wabarokatuh
                Alhamdulillahi bini’matihi tattimusholihaat
                Segala Puji hanya milik Allah Ta’ala Atas segala nikmat dan karuniaNya yang tak terhitung kepada kita. Sholawat serta salam tak lupa selalu kita sanjungkan kepada Nabi kita Nabi Muhammad Sholallohu alaihi wassalam beserta keluarga dan para sahabatnya..dan semoga kita termasuk ke dalam umatnya yang akan menerima syafa’at di Yaumul Akhir kelak..Aamiin Yaa Robbal Alamiin.
                <p>    Di tengah kemajuan tehnologi dan informasi saat ini Yayasan Awwaliyah Al-Asiyah  yang bergerak di bidang pendidikan berupaya terus mendorong dan mengupdate  organisasi ini agar mampu menghasilkan lembaga pendidikan formal ataupun non formal yang berkualitas dan mampu bersaing dengan lembaga lain.
                  Dengan berpedoman pada Visi dan Misi Yayasan yaitu menghasilkan lembaga pendidikan yang berkualitas, profesional, berintegritas dan bermanfaat untuk umat maka kami terus berbenah dari segala arah, menjawab tantangan masa depan dengan bergandengan tangan dan berpegang teguh pada ajaran Islam.</p>
                <p>  Kami terus mendorong upaya positif kepada seluruh pengelola  Lembaga sekolah, tenaga pendidik dan  satuan kependidikan Sekolah dibawah naungan  Awwaliyah Al-Asiyah  terus berkembang dan berkontribusi dalam dunia pendidikan khususnya kabupaten Bogor. Kami sangat mengapresiasi adanya website ini. Dengan adanya website ini kami harap masyarakat luas lebih mengenal dekat dengan Lembaga Pendidikan Yayasan Awwaliyah Al-Asiyah, baik Pendidikan formal atau informal serta  para peserta didik juga mampu mengakses informasi akademik melalui website ini dan para guru serta seluruh civitas akademika sekolah di bawah naungan Yayasan Awwaliyah-Al-Asiyah mampu mendapatkan informasi yang uptodate dalam dunia pendidikan.</p>
                Terakhir kami ucapkan Barokallohufiikum atas semua perjuangan dan pengabdian seluruh guru, pengelola sekolah dan komite sekolah atas kerjasama yang baik selama ini. Perjuangan tak pernah berhenti sampai disini.,karena tantangan masa depan akan silih berganti.
                Semoga apa yang kita lakukan mendapat ridho dari Allah Ta’ala
                Wassalamualaikum warrohamtullahi wabarokatuh</p>
            </div>

        </div>
        </div>
       </div>
    </section>
    <section class="bg-white h-[1800px] sm:h-[1000px]  lg:h-[700px] relative "></section>
    <section id="#pendiri" class="p-8  bg-green-200 ">
        <div class="w-full md:w-[80%] mx-auto relative">
         <div class="my-5 text-center">
             <h4 class="font-medium text-primary">Logo</h4>
             <h1 class="text-xl mt-5 md:text-3xl sm:text-2xl  font-semibold font-[Poppins]">Makna Logo Yayasan Awwaliyah-Al-Asiyah</h1>
         </div>
         <div class="p-3 shadow-lg mt-10 rounded-md bg-white">
             <div class="p-5 md:w-[80%] w-full  mx-auto shadow-lg my-10 border text-center font-[Poppins]" style="background-image: url({{ asset('img/cardlog/1.webp') }})">
                 <div class="w-40 h-40 mx-auto mb-4">
                     <img src="{{ asset('img/logo/logo_yayasan.svg') }}" alt="" class="">
                    </div>  
                    <h2 class="bg-gradient-to-r from-primary  to-kuns bg-clip-text text-transparent font-semibold text-xl my-4">Yayasan Awwaliah Al-Asiyah</h2>
                   
                </div>   
            <div class="w-full mx-auto md:w-[80%]  p-1 sm:p-5 mb-10">
              <div class="w-full p-3">
                  <h2 class="font-bold text-2xl text-tex uppercase my-4">Makna Bentuk</h2>
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
                 <div class="w-full p-3">
                  <h2 class="font-bold text-2xl text-tex uppercase my-4">Makna Warna</h2>
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
     </section>
    
  </div>
    
    <!-- foto pendiri dan tokoh end -->

@endsection

