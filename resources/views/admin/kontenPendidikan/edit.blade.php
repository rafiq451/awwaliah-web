@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Konten Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Konten Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Konten Pendidikan</h5>
              <!-- General Form Konten Pendidikan -->
              <form action="{{ route('konten.update', ['id' => $konten->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                      <input class="form-control" type="file" name="gambar" id="formFile">
                  </div>
                </div>
                @if ($konten->gambar)
                  <div class="row mb-3">
                      <label for="gambar" class="form-label">Gambar Saat Ini</label>
                      <img src="{{ asset('kontenPendidikan/'.$konten->gambar) }}" alt="{{$konten->gambar}}" class="img-fluid">
                  </div>
                @endif
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Sejarah</label>
                  <div class="col-sm-10">
                    <textarea id="sejarah" name="sejarah"  placeholder="Masukan Sejarah">{{$konten->sejarah}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Visi</label>
                  <div class="col-sm-10">
                    <textarea id="visi" name="visi" placeholder="Masukan Visi">{{$konten->visi}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Misi</label>
                  <div class="col-sm-10">
                    <textarea id="misi" name="misi" placeholder="Masukan Misi">{{$konten->misi}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Tujuan</label>
                  <div class="col-sm-10">
                    <textarea id="tujuan" name="tujuan" placeholder="Masukan Tujuan">{{$konten->tujuan}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Ubah</button>
                  </div>
                </div>
              </form><!-- End General Form Konten Pendidikan -->
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
                .create(document.querySelector( '#visi' ), {
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
    ClassicEditor
                .create(document.querySelector( '#misi' ), {
                    toolbar: [
                        'ckbox', 'imageUpload', '|', 'heading', '|', 'undo', 'redo', '|', 'bold', 'italic', '|',
                        'blockQuote', 'indent', 'link', '|', 'bulletedList', 'numberedList'
                    ],
                } )
                .catch( error => {
                    console.error( error );
                } );
    ClassicEditor
                .create(document.querySelector( '#tujuan' ), {
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