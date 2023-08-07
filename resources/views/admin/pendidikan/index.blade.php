@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Pendidikan</h5>
              <a href="/dashboard/berita/tambah" class="btn btn-success mb-3">Tambah Pendidikan</a>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama Pendidikan</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Jenis Pendidikan</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  <tbody>
                    @foreach ($pendidikan as $item)
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$item->nama}}</td>
                      <td>
                        <img src="{{ $item->logo }}" alt="Logo Pendidikan" style="max-width: 100px; max-height: 100px;">
                      </td>
                      <td>{{$item->jenis_pendidikan}}</td>
                    </tr>
                  @php
                      $no++
                  @endphp
                    @endforeach
                  </tbody>
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