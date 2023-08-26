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
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Tingkat Lembaga</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Jenis Pendidikan</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  <tbody>
                    @foreach ($pendidikan as $item)
                    <tr>
                      <td>{{$item->nama}}</td>
                      <td>
                        <img src="{{ asset('/') }}pendidikan/{{ $item->logo }}" alt="{{ $item->logo }}" style="max-width: 100px; max-height: 100px;">
                      </td>
                      <td>{{$item->jenis_pendidikan}}</td>
                      <td>
                          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                            <i class="bi bi-pencil"></i> Edit
                          </button>
                          <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Form Ubah Data Pendidikan </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('pendidikan.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Tingkat Lembaga</label>
                                            <input type="text" class="form-control" value="{{$item->nama}}" name="nama" placeholder="Masukkan gambar" id="nama" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Logo Saat Ini</label><br>
                                            <img src="{{asset("/")}}pendidikan/{{$item->logo}}" alt="{{$item->logo}}" width="100px" class="img-fluid"/>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Upload Logo Baru</label>
                                            <input type="file" class="form-control" name="logo" placeholder="Masukkan logo" id="logo">
                                        </div>

                                        <div class="mb-3">
                                                <label for="jenis_pendidikan" class="col-form-label">Jenis Pendidikan</label>
                                                <select class="form-select" name="jenis_pendidikan" id="jenis_pendidikan" disabled>
                                                    <option value="formal"  {{ $item->jenis_pendidikan == "formal" ? 'selected' : '' }}>Formal</option>
                                                    <option value="non_formal" {{ $item->jenis_pendidikan == "non formal" ? 'selected' : '' }}>Non Formal</option>
                                                </select>
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