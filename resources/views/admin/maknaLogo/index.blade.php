@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Makna Logo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Makna Logo</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Makna Logo</h5>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Tingkat Lembaga</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Makna Bentuk</th>
                      <th scope="col">Makna Warna</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @foreach ($makna as $item)
                  <tbody>
                    <tr>
                      <td>{{$item->pendidikan->nama}}</td>
                      <td>
                        <img src="{{asset("/")}}pendidikan/{{$item->pendidikan->logo}}" alt="{{$item->pendidikan->logo}}" style="width:40px" class="img-fluid"/></td>
                      <td>{!!Str::limit($item->makna_bentuk, 50, '...')!!}</td>
                      <td>{!!Str::limit($item->makna_warna, 50, '...') !!}</td>
                      <td>
                        <button class="btn btn-info" >Detail</button>
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
                                    <form action="{{ route('makna-logo.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="peran" class="col-form-label">Nama Lembaga</label>
                                            <select class="form-control custom-select" name="id_pendidikan" id="id_pendidikan" disabled>
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
                                          <label for="inputNumber" class="col-sm-2 col-form-label">Logo Lembaga </label>
                                          <div class="col-sm-10">
                                            <img src="{{asset("/")}}pendidikan/{{$item->pendidikan->logo}}" alt="{{$item->pendidikan->logo}}" style="width:100px" class="mt-3 img-fluid"/>
                                          </div>
                                        </div>
                                        <div class="row mb-3 mt-4">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Makna Bentuk</label>
                                          <div class="col-sm-10">
                                            <textarea id="makna_bentuk" name="makna_bentuk" placeholder="Masukan sambutan">{{$item->makna_bentuk}}</textarea>
                                          </div>
                                        </div>
                                        <div class="row mb-3 mt-4">
                                          <label for="inputPassword" class="col-sm-2 col-form-label">Makna Bentuk</label>
                                          <div class="col-sm-10">
                                            <textarea id="makna_warna" name="makna_warna" placeholder="Masukan sambutan">{{$item->makna_warna}}</textarea>
                                          </div>
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
                  </tbody>
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
@section('scripts')
  <script>
    ClassicEditor
                .create(document.querySelector( '#makna_bentuk' ), {
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
    ClassicEditor
                .create(document.querySelector( '#makna_warna' ), {
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
  </script>
  @endsection

@include('admin.layout.footer');
