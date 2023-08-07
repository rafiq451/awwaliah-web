@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Pendiri & Tokoh Yayasan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Pendiri & Tokoh Yayasan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pendiri & Tokoh</h5>
                          <!-- Large Modal -->
              <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                Tambah Pendiri & Tokoh
              </button>

              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Pendiri  tokoh</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('tokoh.store') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Nama</label>
                              <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" id="nama">
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Jabatan</label>
                              <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan" id="jabatan">
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Gambar</label>
                              <input type="file" class="form-control" name="gambar" id="gambar">
                          </div>
                          <div class="modal-footer">
                              <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

              <div class="row justify-content-center">
                @foreach ($tokoh as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-lg">
                        <div class="conten-image overflow-hidden rounded-t-lg">
                            <img src="{{ asset('/') }}pendiri&tokoh/{{ $item->gambar }}" alt="{{ $item->nama }}" class="card-img-top img-fluid card-image">
                        </div>
                        <div class="card-body bg-white p-4 text-center">
                            <h2 class="text-2xl text-primary mb-2">{{ $item->nama }}</h2>
                            <p>{{ $item->jabatan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                  </div>

    <style>
    .card-image {
        width: 100%;
        height: 350px; /* Sesuaikan tinggi gambar sesuai kebutuhan */
        object-fit: cover;
    }
</style>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->

@include('admin.layout.footer');
