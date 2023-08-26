@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Sambutan Ketua Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Sambutan Ketua Yayasan</li>
        </ol>
      </nav>
    </div>
    <!-- Menampilkan pesan sukses jika ada -->
      @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Sambutan Ketua Yayasan</h5>
                <a href="{{route('sambutan.edit')}}" class="btn btn-success mb-1">Ubah Sambutan Ketua Yayasan</a>
                <div class="d-flex justify-content-between flex-column-reverse flex-md-row text-cemter">
                <div class="col-md-8 text-justify mt-2">
                @foreach ($sambutan as $item)
                  {!! $item->sambutan !!}
                </div>
                  <div class="col-md-4 mt-2 text-center d-flex align-items-center justify-content-center" style="border:1px solid rgb(0, 248, 33); border-radius:3px;height: 250px; width:210px; text-align:justify">
                    <img src="{{asset("/")}}Sambutan/{{$item->gambar}}" alt="{{$item->gambar}}" class="mt-3 img-fluid"/>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
        </section> 
      </main><!-- End #main -->

@include('admin.layout.footer');