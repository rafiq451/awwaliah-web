@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Konten Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Detail Konten Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if (session('success'))
        
    @endif
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Detail Konten Pendidikan <b class="text-primary">{{$konten->pendidikan->nama}}</b></h5>
              <hr>
              <img src="{{asset("/")}}kontenPendidikan/{{$konten->gambar}}" class="img-rounded mb-4" style="width:100%; height:100%" alt="{{$konten->gambar}}">
              <h5 style="font-weight:bold;">Sejarah</h5>
              <p>{!! $konten->sejarah !!}</p>
              <h5 style="font-weight:bold;">Visi</h5>
              <p>{!! $konten->visi !!}</p>
              <h5 style="font-weight:bold;">Misi</h5>
              <p>{!! $konten->misi !!}</p>
              <h5 style="font-weight:bold;">Tujuan</h5>
              <p>{!! $konten->tujuan !!}</p>
          </div>
        </div>
      </div>
      </section> 

  </main><!-- End #main -->
  

@include('admin.layout.footer');