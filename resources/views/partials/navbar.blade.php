<header class="w-full bg-transparent absolute top-0 left-0 items-center flex z-10 font-['Poppins']">
      <div class="container">
        <div class="flex justify-between items-center relative">
          <div id="logo" class="w-24 h-24 p-2">
            <a href=""><img src="{{ asset('img/logo/logo_yayasan.svg') }}" alt="" /></a>
          </div>
          <div class="flex items-center px-4">
            <button id="hamburger" name=" hamburger" class="block absolute right-4 lg:hidden">
              <span class="hamburger-line bg-primary transition duration-300 ease-out origin-top-left"></span>
              <span class="hamburger-line bg-primary transition duration-300 ease-out"></span>
              <span class="hamburger-line bg-primary transition duration-300 ease-out origin-bottom-left"></span>
            </button>
            <nav id="nav-menu" class="hidden absolute lg:block lg:static lg:bg-transparent lg:max-w-full bg-white shadow-lg rounded-lg max-w-full w-full right-4 top-full lg:shadow-none lg:rounded-none lg:border-none border border-primary">
              <ul class="block lg:flex lg:items-center lg:uppercase">
                <li class="group">
                  <a href="/" class="text-base text-secondry py-3 mx-6 flex hover:text-primary">Home</a>
                </li>
                <li class="group">
                  <a href="#about" class="text-base text-secondry py-3 lg:mx-3 mx-6 flex hover:text-primary"
                    >Tentang Kami <span class="mx-2"><i class="fa-solid fa-chevron-down"></i></span
                  ></a>
                  <div class="absolute hidden  bg-slate-50 shadow-lg rounded-lg max-w-[250px] w-full top-19 left-4 lg:left-auto">
                    <ul class="block">
                      <li><a href="/sejarah" class="dropdown-menu">Sejarah Berdirinya yayasan</a></li>
                      <li><a href="/visi&misi" class="dropdown-menu">Visi Misi Yayasan</a></li>
                      <li><a href="/pendiri-tokoh" class="dropdown-menu">Pendiri dan Tokoh</a></li>
                      <li><a href="/kepengurusan" class="dropdown-menu">Kepengurusan Yayasan</a></li>
                      <li><a href="/identitas" class="dropdown-menu">Identitas</a></li>
                    </ul>
                  </div>
                </li>
                <li class="color">
                  <a href="/travel" class="text-base text-secondry py-3 mx-6 flex hover:text-primary">Usaha</a>
                </li>
                <li class="color">
                  <a href="/berita" class="text-base text-secondry py-3 mx-6 flex hover:text-primary">Berita</a>
                </li>
                <li class="color">
                  <a href="#" class="text-base text-secondry py-3 mx-6 flex hover:text-primary"
                    >Pendidikan <span class="mx-2"><i class="fa-solid fa-chevron-down"></i></span
                  ></a>
                  <div class="absolute hidden bg-slate-50 shadow-lg rounded-lg max-w-[250px] w-full top-19 left-4 lg:left-auto">
                    <ul class="block">
                      <li>
                        <a href="#formal" class="dropdown-menu ">FORMAL <span class="mx-2"><i class="fa-solid fa-chevron-down"></i></span
                          ></a>
                        <div class="absolute hidden border border-primary bg-slate-50 shadow-lg rounded-lg max-w-[250px] w-full top-19 left-4 lg:left-10">
                          <ul class="block">
                            <li><a href="" class="dropdown-menu">TK</a></li>
                            <li><a href="/pendidikan/tingkat-sdit" class="dropdown-menu">SDIT</a></li>
                            <li><a href="/pendidikan/" class="dropdown-menu">SMP PLUS</a></li>
                            <li><a href="" class="dropdown-menu">MA</a></li>
                          </ul>
                        </div>
                      </li>
                      <li>
                        <a href="#non-formal" class="dropdown-menu">NON FORMAL <span class="mx-2"><i class="fa-solid fa-chevron-down"></i></span></a>
                        <div class="absolute hidden border border-primary bg-slate-50 shadow-lg rounded-lg max-w-[250px] w-full top-19 left-4 lg:left-10">
                          <ul class="block">
                            <li><a href="#" class="dropdown-menu">Pondok Pesantren</a></li>
                            <li><a href="#" class="dropdown-menu">Asrama anak Yatim</a></li>
                            <li><a href="/pendidikan/" class="dropdown-menu">asrama tahfidz</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="color py-3 w-36">
                  <a href="#berita" class="text-base bg-kuns rounded-lg text-secondry py-3 px-3 mx-6 flex hover:text-primary">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>