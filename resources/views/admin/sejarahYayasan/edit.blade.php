@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Ubah Sejarah Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Sejarah Yayasan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Ubah Sejarah Yayasan</h5>
              <!-- General Form Ubah Sejarah Yayasan -->
              <form action="/dashboard/sejarah/update-sejarah" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name="gambar" id="formFile">
                    {{-- <img src="{{ asset('images/' . $sejarah->gambar) }}" alt="" style="max-width: 200px;"> --}}
                  </div>
                </div>

                 @if ($sejarah->gambar)
                <div class="row mb-3">
                    <label for="gambar" class="form-label">Gambar Saat Ini</label>
                    <img src="{{ asset('images/' . $sejarah->gambar) }}" alt="Gambar Sejarah" class="img-fluid">
                </div>
              @endif
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Sejarah</label>
                  <div class="col-sm-10">
                    <textarea id="sejarah" name="sejarah" placeholder="Masukan Sejarah">{{$sejarah->sejarah}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Kurikulum</label>
                  <div class="col-sm-10">
                    <textarea id="kurikulum" name="kurikulum" placeholder="Masukan kurikulum">{{$sejarah->kurikulum}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Ubah</button>
                  </div>
                </div>

              </form><!-- End General Form ubah Sejarah Yayasan -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @section('scripts')
  <script>
    ClassicEditor
                .create(document.querySelector( '#sejarah' ), {
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
    ClassicEditor
                .create(document.querySelector( '#kurikulum' ), {
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