@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Konten Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Konten Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Konten Pendidikan</h5>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lembaga</th>
                        <th>Sejarah</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Tujuan</th>
                        <th>Actions</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  <tbody>
                    @foreach ($kontenPendidikans as $item)
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$item->pendidikan->nama}}</td>
                      <td>{{$item->sejarah}}</td>
                      <td>{{$item->visi}}</td>
                      <td>{{$item->misi}}</td>
                      <td>{{$item->tujuan}}</td>
                      <td>
                        <button class="btn btn-primary">Detail</button>
                        <a href="/dashboard/kontenpendidikan/edit" class="btn btn-warning">Edit</a>
                        <button class="btn btn-danger">Hapus</button>
                      </td>
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