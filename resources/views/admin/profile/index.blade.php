@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Profile Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Profile Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
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
              <h5 class="card-title">Data Profile Pendidikan</h5>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lembaga</th>
                        <th>Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  <tbody>
                    @foreach ($profile as $item)
                    <tr>
                      <td>{{$no}}</td>
                      <td>{{$item->pendidikan->nama}}</td>
                      <td>
                        <a href="/dashboard/profile/{{$item->id}}/detail" class="btn btn-primary">Detail</a>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                            Edit
                          </button>
                          <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Ubah Data Profile <b>{{$item->pendidikan->nama}}</b></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('profile.update',$item->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                          <label for="nama" class="col-form-label">Nama Sekolah</label>
                                          <input type="text" class="form-control" value="{{$item->nama_sekolah}}" name="nama_sekolah" placeholder="Masukkan Nama Sekolah" id="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">NPSN</label>
                                            <input type="text" class="form-control" value="{{$item->npsn}}" placeholder="Masukan NPSN" name="npsn" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Status Sekolah</label>
                                            <input type="text" class="form-control" value="{{$item->status_sekolah}}" placeholder="Masukan Jabatan" name="status_sekolah" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Akreditasi</label>
                                            <input type="text" class="form-control" value="{{$item->akreditasi}}" placeholder="Masukan Jabatan" name="akreditasi" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Alamat Sekolah</label>
                                            <input type="text" class="form-control" value="{{$item->alamat_sekolah}}" placeholder="Masukan Jabatan" name="alamat" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">No telepon</label>
                                            <input type="text" class="form-control" value="{{$item->no_telepon}}" placeholder="Masukan Jabatan" name="no_telp" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">No Fax</label>
                                            <input type="text" class="form-control" value="{{$item->no_fax}}" placeholder="Masukan Jabatan" name="no_fax" id="jabatan">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Email Sekolah</label>
                                            <input type="email" class="form-control" value="{{$item->email}}" placeholder="Masukan Jabatan" name="email" id="jabatan">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                            <button type="submit" class="btn btn-warning">Simpan</button>
                                        </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Large Modal-->
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