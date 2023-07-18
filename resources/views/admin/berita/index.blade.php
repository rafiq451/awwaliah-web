@include('admin.layout.header');
@include('admin.layout.navbar');

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Dashborad</li>
          <li class="breadcrumb-item active">Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Berita</h5>
              <a href="/dashboard/berita/tambah" class="btn btn-success mb-3">Tambah Berita</a>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Konten</th>
                      <th scope="col">Tanggal Rilis</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($berita as $item)
                  <tbody>
                    <tr>
                      <th scope="row">{{$no}}</th>
                      <td>{{$item->judul}}</td>
                      <td>{{$item->konten}}</td>
                      <td>28</td>
                      <td>{{$item->gambar}}</td>
                      <td>
                        <button class="btn btn-primary">Detail</button>
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-danger">Hapus</button>
                      </td>
                    </tr>
                  </tbody>
                  @php
                      $no++
                  @endphp
                  @endforeach
                </table>
              </div>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->


@include('admin.layout.footer');
