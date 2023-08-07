@include('admin.layout.header');
@include('admin.layout.navbar');


<main id="main" class="main">
    <div class="pagetitle">
      <h1>Visi & Misi Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Visi & Misi Yayasan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Visi Misi Yayasan </h5>
              <a href="/dashboard/visi&misi/edit" class="btn btn-success mb-1">Ubah Visi & Misi Yayasan</a>
              <hr>
                <h5 style="font-weight:bold;">Visi</h5>
                  {!! $visi_misi->visi !!}
                <h5 style="font-weight:bold;">Misi</h5>
                  {!! $visi_misi->misi !!}
          </div>
        </div>
      </div>
      </section> 

  </main><!-- End #main -->

@include('admin.layout.footer');