@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Sejarah Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Sejarah Yayasan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Sejarah Yayasan</h5>
              <a href="/dashboard/berita/tambah" class="btn btn-success mb-1">Ubah Sejarah Yayasan</a>
              <hr>
              
              <img src="{{asset("/")}}img/1.jpg" class="img-rounded mb-4  " style="width:100%; height:500px" alt="">
              @foreach ($sejarah as $item)
              <h5 style="font-weight:bold;">Sejarah</h5>
              <p>
                {{$item->sejarah}}
              </p>
              <h5 style="font-weight:bold;">Kurikulum</h5>
              <p>
                {{$item->kurikulum}}
              </p>
              @endforeach
          </div>
        </div>
      </div>
      </section> 

  </main><!-- End #main -->

@include('admin.layout.footer');