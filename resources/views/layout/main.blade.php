<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- fontawwesome -->
    <link rel="stylesheet" href="{{ asset("fontawesome/css/all.css")  }}"/>

    {{-- font poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&display=swap" rel="stylesheet">

    {{-- font Viga --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Viga&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

    <!--  -->
    <!-- <link rel="stylesheet" href="css/custome.css"> -->
    @vite('resources/css/app.css' )
    <title>Awwaliah Al-asiyah | {{$title}}</title>
  </head>
  <body class=" bg-slate-50">
    <!-- Navbar section start -->
    @include('partials/navbar')
    <!-- Navbar section end -->
    <div  class="pt-2 mt-24">
    @yield('container')
    </div>
    
    <!-- footer start -->
    <footer class="w-full -my-6 pb-12 bg-zinc-900 text-white">
          <div class="flex flex-wrap justify-center p-10 my-6 ">
            <div class="w-full lg:w-[40%] my-6 ">
              <div class="w-40 h-40 mx-auto mb-4"><img src="{{ asset( 'img/logo/logo_yayasan.svg') }}" alt="" /></div>
              <h2 class="text-center text-xl ">Awwaliah Al-Asiyah</h2>
              <div class="font-['Poppins'] font-normal">
              <div class="flex text-center mt-6 my-5">
                <span class="mx-3"><i class="fa-solid fa-envelope-circle-check"></i></span>
                <a href=""><p class="catagory-footer">Awwaliah Al-asiyah</p></a>
              </div>
              <div class="flex text-center my-5">
                <span class="mx-3"><i class="bi bi-geo-alt-fill"></i></span>
                <a href=""><p class="catagory-footer">Lorem ipsum dolor sit amet.</p></a>
              </div>
              <div class="flex text-center my-5">
                <span class="mx-3"><i class="bi bi-telephone-fill"></i></span>
                <a href=""><p class="catagory-footer">-0187198279287</p></a>
              </div>
            </div>
            </div>
            <div class="w-full lg:w-[20%] my-5 ">
              <div class="p-2">
              <h4 class="text-2xl">Catagory Berita</h4>
             <ul>
              <li class="my-4">
                <h2 class="catagory-footer"><a href="">Kejuaraan</a></h2>
              </li>
              <li class="my-4">
                <h2 class="catagory-footer"><a href="">Santunan Anak Yatim</a></h2>
              </li>
              <li class="my-4">
                <h2 class="catagory-footer"><a href="">Teknologi</a></h2>
              </li>
              <li class="my-4">
                <h2 class="catagory-footer"><a href="">Relasi Sekolah</a></h2>
              </li>
             </ul>
            </div>
            </div>
            <div class="w-full sm:w-[90%] lg:w-[40%] md:w-[70%]  my-5 ">
              <div class="p-2 font-inter grid grid-cols-2 gap-2  md:grid-cols-3 ">
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
                <div class="h-15 bg-blue-500 aspect-[4/3] overflow-hidden hover:scale-95 transition-all duration-500  rounded-lg  group relative">
                  <div class="w-full h-full bg-cover bg-center" style="background-image: url({{ asset('img/2.jpg') }})"></div>
                </div>
            </div>
            </div>
          </div>
        </div>

        <div class="w-full pt-10 border-t border-slate-400">
          <div class="flex items-center justify-center mb-5">
            <!-- Youtobe -->
            <a
              href="https://www.youtube.com/channel/UCznODwl9tr4pKzYnJVwGzjA/videos"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                />
              </svg>
            </a>
            <!-- Instagram -->
            <a
              href="https://www.instagram.com/console.lografiq/"
              target="_blank"
              class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border text-slate-400 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
            >
              <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>Instagram</title>
                <path
                  d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                />
              </svg>
            </a>
            <!-- Facebook -->
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
            </a>
          </div>
          <p class="text-sm font-medium text-slate-500 text-center">Copyright &#169; <a href="https://www.instagram.com/console.lografiq/" class="text-primary" target="_blank"> Awwaliah Al-asiyah</a>, All rights reserved.</p>
    </footer>
    <!-- footer end -->

    {{-- <script src="{{ @vite('js/script.js') }}" defer></script> --}}
    @vite('public/js/script.js')
  </body>
</html>
