@include('admin.layout.header');
@include('admin.layout.navbar');


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Form Ubah Sambutan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Sambutan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Ubah Sambutan</h5>
              <!-- General Form Ubah Sambutan -->
              <form action="{{route('sambutan.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Nama </label>
                    <div class="col-sm-10">
                      <input class="form-control" type="text" value="{{$sambutan->nama}}" name="nama" placeholder="Masukan Nama Ketua Yayasan" id="nama">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Baru</label>
                    <div class="col-sm-10">
                      <input class="form-control" type="file" name="gambar" id="formFile">
                    </div>
                  </div>
                  <label for="inputNumber" class="col-sm-2 col-form-label">Gambar Saat ini </label>
                  <div class="col-md-4 mt-2 text-center d-flex align-items-center justify-content-center" style="border:1px solid rgb(0, 248, 33); border-radius:3px;height: 250px; width:210px; text-align:justify">
                    <img src="{{asset("/")}}Sambutan/{{$sambutan->gambar}}" alt="{{$sambutan->gambar}}" class="mt-3 img-fluid"/>
                  </div>
                  <div class="row mb-3 mt-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Sambutan</label>
                    <div class="col-sm-10">
                      <textarea id="sambutan" name="sambutan" placeholder="Masukan sambutan">{{$sambutan->sambutan}}</textarea>
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
                .create(document.querySelector( '#sambutan' ), {
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