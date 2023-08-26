@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Extrakurikuler</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Extrakurikuler</li>
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
              <h5 class="card-title">Data Extrakurikuler</h5>
              <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                Tambah Extrakurikuler
              </button>

                 <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Data Extrakurikuler</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="{{route('exrakurikuler.store')}}" method="POST" enctype="multipart/form-data">
                          @csrf
                         <div class="mb-3">
                              <label for="peran" class="col-form-label">Nama Lembaga</label>
                              <select class="form-control custom-select" name="id_pendidikan" id="id_pendidikan" required>
                                  <option value="" @required(true)>--Pilih Nama Lembaga--</option>
                                  <option value="4">Tingkat Tk</option>
                                  <option value="5">Tingkat SDIT</option>
                                  <option value="6">Tingkat SMP Plus</option>
                                  <option value="7">Tingkat MA</option>
                                  <option value="8">Pondok Pesantren</option>
                                  <option value="10">Asrama Anak Yatim</option>
                                  <option value="12">Asrama Tahfidz</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" @required(true) placeholder="Masukkan Nama Extrakurikuler" id="nama">
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Deskripsi Extrakurikuler</label>
                              <input type="text" class="form-control" placeholder="Masukan Deskripsi Extrakurikuler" name="deskripsi" id="deskripsi">
                          </div>
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Gambar</label>
                              <input type="file" class="form-control" placeholder="" name="gambar" id="gambar">
                          </div>
                          <div class="modal-footer">
                              <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                              <button type="submit" class="btn btn-warning">Simpan</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->
              <div class="mb-3">
                <label for="filterLembaga" class="col-form-label">Filter Berdasarkan lembaga:</label>
                <select class="form-select " id="filterLembaga">
                    <option value="all">Semua Lembaga</option>
                    <option value="4">Tingkat TK</option>
                    <option value="5">Tingkat SDIT</option>
                    <option value="6">Tingkat SMP Plus</option>
                    <option value="7">Tingkat MA</option>
                    <!-- Add more options for other levels -->
                </select>
            </div>
            
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table">
                   <thead>
                    <tr>
                        <th>No</th>
                        <th>Lembaga</th>
                        <th>Nama Ekstrakurikuler</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($extrakurikuler as $item)
                  <tbody>
                    <tr class="data-row" data-lembaga="{{ $item->id_pendidikan }}">
                    <td>{{$no}}</td>
                    <td>{{ $item->pendidikan->nama }}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{Str::limit($item->deskripsi, 20)}}</td>
                    <td><img src="{{ asset('/') }}extrakurikuler/{{ $item->gambar }}" alt="{{ $item->gambar }}" style="width:20px;height:20px;" class="card-img-top img-fluid card-image"></td>
                        <td>
                          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{$item->id}}">
                            Detail
                          </button>
                          <div class="modal fade" id="showModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Detail Data Extrakurikuler {{$item->pendidikan->nama}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                        <div class="mb-3">
                                            <img src="{{ asset('/') }}extrakurikuler/{{ $item->gambar }}" alt="{{ $item->gambar }}"  class="card-img-top img-fluid" style="border-radius:1%;">
                                        </div>
                                        <div class="mb-3">
                                          <h4 class="card-text text-primary">{{$item->nama}}</h4>
                                          <p class="card-text">{{$item->deskripsi}}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End Large Modal-->
                          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                            Edit
                          </button>
                          <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Form Ubah Data Extrakurikuler</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('extrakurikuler.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                      <div class="mb-3">
                                            <label for="peran" class="col-form-label">Nama Lembaga</label>
                                            <select class="form-control custom-select" name="id_pendidikan" id="id_pendidikan">
                                              <option value="4" {{ $item->id_pendidikan == 4 ? 'selected' : '' }}>Tingkat Tk</option>
                                              <option value="5" {{ $item->id_pendidikan == 5 ? 'selected' : '' }}>Tingkat SDIT</option>
                                              <option value="6" {{ $item->id_pendidikan == 6 ? 'selected' : '' }}>Tingkat SMP Plus</option>
                                              <option value="7" {{ $item->id_pendidikan == 7 ? 'selected' : '' }}>Tingkat MA</option>
                                              <option value="8" {{ $item->id_pendidikan == 8 ? 'selected' : '' }}>Pondok Pesantren</option>
                                              <option value="10" {{ $item->id_pendidikan == 10 ? 'selected' : '' }}>Asrama Anak Yatim</option>
                                              <option value="12" {{ $item->id_pendidikan == 12 ? 'selected' : '' }}>Asrama Tahfidz</option>
                                          </select>
                                        </div>
                                        <div class="mb-3">
                                          <label for="nama" class="col-form-label">Nama</label>
                                          <input type="text" class="form-control" value="{{$item->nama}}" name="nama" placeholder="Masukkan Nama" id="nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Deskripsi</label>
                                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10">{{$item->deskripsi}}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Gambar Saat Ini</label>
                                            <img src="{{ asset('/') }}extrakurikuler/{{ $item->gambar }}" alt="{{ $item->gambar }}"  class="form-control card-img-top img-fluid">
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Upload Foto Baru</label>
                                            <input type="file" class="form-control" name="gambar" placeholder="Masukkan gambar" id="gambar">
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
                            {{-- Tombol Hapus --}}
                          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$item->id}}">
                            Hapus
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="deleteModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                      </div>
                                      <div class="modal-body">
                                          Anda yakin ingin menghapus data <b></b> ini?
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <form action="{{ route('extrakurikuler.destroy', ['id' => $item->id]) }}" method="POST" style="display: inline-block;">
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
                  </tbody>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main><!-- End #main -->

  @section('scripts')
    <script>
      const filterLembaga = document.getElementById('filterLembaga');
      const rows = document.querySelectorAll('.data-row'); // Tambahkan class 'data-row' ke setiap baris tabel

      filterLembaga.addEventListener('change', function () {
          const selectedLembaga = filterLembaga.value;

          rows.forEach(row => {
              if (selectedLembaga === 'all' || row.dataset.lembaga === selectedLembaga) {
                  row.style.display = 'table-row';
              } else {
                  row.style.display = 'none';
              }
          });
      });
    </script>
  @endsection

@include('admin.layout.footer');