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
              <h5 class="card-title">Daftar Berita</h5>
              <a href="/dashboard/berita/tambah" class="btn btn-success mb-3">Tambah Pendiri&tokoh</a>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Foto Tokoh</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Hapus</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>K.H Muhammad Hamzah</td>
                      <td>[foto]</td>
                      <td>[Jabatan]</td>
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
