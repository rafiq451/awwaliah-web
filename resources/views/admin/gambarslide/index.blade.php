@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Gambar Slide</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Gambar Slide</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
     @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
    @endif
    @if(session('success-info'))
          <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <i class="bi bi-star me-1"></i>
              Data Berhasil di Ubah
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    @endif 
    @if(session('success-danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-trash"></i>
          {{ session('success-danger') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif 
        <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Gambar Slide</h5>
              <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                Tambah Gambar Slide
              </button>
              <button type="button" class="btn btn-primary mb-3 mx-1" data-bs-toggle="modal" data-bs-target="#sliderModal">
                Lihat Tampilan Slide
              </button>

              <div class="modal fade" id="sliderModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Upload Gambar Slider</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                          <!-- Slides with indicators -->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    @foreach ($gambarSlide as $index => $item)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="{{ $index === 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach ($gambarSlide as $index => $item)
                                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                            <img src="{{ asset('gambarSlider/' . $item->gambar) }}" alt="{{ $item->gambar }}" class="form-control card-img-top img-fluid">
                                        </div>
                                    @endforeach
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div><!-- End Slides with indicators -->
                          <div class="modal-footer">
                              <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                          </div>
                    </div>
                  </div>
                </div>
              </div><!-- End Large Modal-->

                    
              <div class="modal fade" id="largeModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Upload Gambar Slider</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="{{route('gambarslide.store')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Upload Gambar Baru</label>
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
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($gambarSlide  as $item)
                  <tbody>
                    <tr>
                      <td>{{$no}}</td>
                      <td><img src="{{ asset('/') }}gambarSlider/{{ $item->gambar }}" alt="{{ $item->gambar }}" style="width: 100px;
                      height: 50px;" class="card-img-top img-fluid card-image"></td>
                      <td>
                      {{-- Button Modal Show --}}
                      <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#showModal{{$item->id}}">
                          <i class="bi bi-eye"></i> Lihat
                          </button>
                          <div class="modal fade" id="showModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Tampilan detail</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Gambar Saat Ini</label>
                                            <img src="{{ asset('/') }}gambarSlider/{{ $item->gambar }}" alt="{{ $item->gambar }}"  class="form-control card-img-top img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Kembali</button>
                                        </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                      {{-- end Modal show --}}

                      {{-- Button edit --}}
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{$item->id}}">
                            <i class="bi bi-pencil"></i> Edit
                          </button>
                          <div class="modal fade" id="editModal{{$item->id}}" tabindex="-1">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title">Form Ubah Gambar Slider</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('gambarslide.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Gambar Saat Ini</label>
                                            <img src="{{ asset('/') }}gambarSlider/{{ $item->gambar }}" alt="{{ $item->gambar }}"  class="form-control card-img-top img-fluid">
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
                             <i class="bi bi-trash"></i> Hapus
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
                                          <form action="{{ route('gambarslide.destroy', ['id' => $item->id]) }}" method="POST" style="display: inline-block;">
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

@include('admin.layout.footer');