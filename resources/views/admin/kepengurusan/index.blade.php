@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>kepengurusan Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">kepengurusan Yayasan</li>
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
              <h5 class="card-title">Data Kepengurusan Yayasan</h5>
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                Tambah Data kepengurusan
              </button>

              
              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Data Kepengurusan</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{ route('kepengurusan.store') }}" method="POST">
                          @csrf
                         <div class="mb-3">
                              <label for="peran" class="col-form-label">Peran</label>
                              <select class="form-control custom-select" name="peran" id="peran" required>
                                  <option value="" @required(true)>--Pilih Peran Kepengurusan--</option>
                                  <option value="Pembina">Pembina</option>
                                  <option value="Pengawas">Pengawas</option>
                                  <option value="Pengurus">Pengurus</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" @required(true) placeholder="Masukkan Nama" id="nama">
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Jabatan</label>
                              <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan" id="jabatan">
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
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Peran</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($kepengurusan as $item)
                  @if ($item->peran == "Pembina")
                    <tbody>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->peran}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>{{$item->nama}}</td>
                        <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                          Edit
                        </button>
                        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Ubah Data Kepengurusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('kepengurusan.update',$item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                      <div class="mb-3">
                                            <label for="peran" class="col-form-label">Peran</label>
                                            <select class="form-control custom-select" name="peran" id="peran" required>
                                                @foreach ($peranOptions as $option)
                                                    <option value="{{ $option }}" {{ $option == $item->peran ? 'selected' : '' }}>
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="nama" class="col-form-label">Nama</label>
                                          <input type="text" class="form-control" value="{{$item->nama}}" name="nama" @required(true) placeholder="Masukkan Nama" id="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" value="{{$item->nama}}" placeholder="Masukan Jabatan" name="jabatan" id="jabatan">
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

                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">
                            Hapus
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                      </div>
                                      <div class="modal-body">
                                          Anda yakin ingin menghapus data <b>{{$item->nama}}</b> ini?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <form action="{{ route('kepengurusan.destroy', $item->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </td>
                      </tr>
                    @php
                        $no++
                    @endphp
                    @endif
                    @endforeach
                    </tbody>
                </table>
              </div>
              <!-- End Default Table Example -->
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Peran</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($kepengurusan as $item)
                  @if ($item->peran == "Pengawas")
                    <tbody>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->peran}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>{{$item->nama}}</td>
                        <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                          Edit
                        </button>
                        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Ubah Data Kepengurusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                             <form action="{{ route('kepengurusan.update',$item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                      <div class="mb-3">
                                            <label for="peran" class="col-form-label">Peran</label>
                                            <select class="form-control custom-select" name="peran" id="peran" required>
                                                @foreach ($peranOptions as $option)
                                                    <option value="{{ $option }}" {{ $option == $item->peran ? 'selected' : '' }}>
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="nama" class="col-form-label">Nama</label>
                                          <input type="text" class="form-control" value="{{$item->nama}}" name="nama" @required(true) placeholder="Masukkan Nama" id="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" value="{{$item->jabatan}}" placeholder="Masukan Jabatan" name="jabatan" id="jabatan">
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

                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">
                            Hapus
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                      </div>
                                      <div class="modal-body">
                                          Anda yakin ingin menghapus data <b>{{$item->nama}}</b> ini?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <form action="{{ route('kepengurusan.destroy', $item->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </td>
                      </tr>
                    @php
                        $no++
                    @endphp
                    @endif
                    @endforeach
                    </tbody>
                </table>
              </div>
              <!-- End Default Table Example -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Peran</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($kepengurusan as $item)
                  @if ($item->peran == "Pengurus")
                    <tbody>
                      <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->peran}}</td>
                        <td>{{$item->jabatan}}</td>
                        <td>{{$item->nama}}</td>
                        <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                          Edit
                        </button>
                        <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Ubah Data Kepengurusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('kepengurusan.store') }}" method="POST">
                                        @csrf
                                      <div class="mb-3">
                                            <label for="peran" class="col-form-label">Peran</label>
                                            <select class="form-control custom-select" name="peran" id="peran" required>
                                                @foreach ($peranOptions as $option)
                                                    <option value="{{ $option }}" {{ $option == $item->peran ? 'selected' : '' }}>
                                                        {{ $option }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="nama" class="col-form-label">Nama</label>
                                          <input type="text" class="form-control" name="nama" @required(true) placeholder="Masukkan Nama" id="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Jabatan</label>
                                            <input type="text" class="form-control" placeholder="Masukan Jabatan" name="jabatan" id="jabatan">
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

                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">
                            Hapus
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                      </div>
                                      <div class="modal-body">
                                          Anda yakin ingin menghapus data <b>{{$item->nama}}</b> ini?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <form action="{{ route('kepengurusan.destroy', $item->id) }}" method="POST">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit" class="btn btn-danger">Hapus</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </td>
                      </tr>
                    @php
                        $no++
                    @endphp
                    @endif
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