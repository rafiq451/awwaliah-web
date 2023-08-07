@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Berita</h5>
              <!-- General Form Berita -->
              <form>
                <div class="row mb-3">
                  <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Rilis</label>
                  <div class="col-sm-10">
                    <input type="date" disabled class="form-control" value="{{date('Y-m-d');}}">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Masukan Judul">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Artikel</label>
                  <div class="col-sm-10">
                    <textarea id="task-texarea" placeholder="Masukan artikel"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example">
                      <option selected>--Pilih Kategori--</option>
                      <option value="Akademik">Akademik</option>
                      <option value="Pengumuman">Pengumuman</option>
                      <option value="Kegiatan Sekolah">Kegiatan Sekolah</option>
                      <option value="Ekstrakurikuler">Ekstrakurikuler</option>
                      <option value="Prestasi">Prestasi</option>
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Tambah</button>
                  </div>
                </div>

              </form><!-- End General Form Berita -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @section('scripts')
  <script>
    ClassicEditor
                .create(document.querySelector( '#task-texarea' ), {
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