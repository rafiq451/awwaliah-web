@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Ubah Visi & Misi</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Visi & Misi</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Ubah Visi & Misi</h5>
              <!-- General Form Ubah Visi & Misi -->
              <form action="/dashboard/visi&misi/update-visi&misi" method="post">
                @csrf
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">visi</label>
                  <div class="col-sm-10">
                    <textarea id="visi" name="visi" placeholder="Masukan visi">{{$visi_misi->visi}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword" class="col-sm-2 col-form-label">misi</label>
                  <div class="col-sm-10">
                    <textarea id="misi" name="misi" placeholder="Masukan misi">{{$visi_misi->misi}}</textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-success">Ubah</button>
                  </div>
                </div>

              </form><!-- End General Form ubah Visi & Misi -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  @section('scripts')
  <script>
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
  </script>
  @endsection


@include('admin.layout.footer');