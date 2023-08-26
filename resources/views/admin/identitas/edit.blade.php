@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Ubah identitas</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">identitas</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Ubah identitas</h5>
              <!-- General Form Ubah identitas -->
              <form action="{{route('identitas.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$identitas->nama}}" name="nama" placeholder="Masukan Nama Ketua Yayasan" id="nama">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Logo Baru</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" name="logo" id="formFile">
                    </div>
                  </div>
                  <div class="row mb-3 mt-4">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Logo Saat ini </label>
                    <div class="col-sm-10">
                      <img src="{{asset("/")}}IdentitasYayasan/{{$identitas->logo}}" alt="{{$identitas->logo}}" style="width:200px" class="mt-3 img-fluid"/>
                    </div>
                  </div>
                  <div class="row mb-3 mt-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Makna Bentuk</label>
                    <div class="col-sm-10">
                      <textarea id="makna_bentuk" name="makna_bentuk" placeholder="Masukan makna bentuk">{{$identitas->makna_bentuk}}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3 mt-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Makna Bentuk</label>
                    <div class="col-sm-10">
                      <textarea id="makna_warna" name="makna_warna" placeholder="Masukan makna warna">{{$identitas->makna_warna}}</textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Ubah</button>
                  </div>
                </div>
              </form><!-- End General Form ubah Sambutan -->
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