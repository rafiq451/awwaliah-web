@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Identitas Yayasan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Identitas Yayasan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
        <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Identitas Yayasan</h5>
              <a href="{{route('identitas.edit')}}" class="btn btn-success mb-3">Ubah Identitas</a>
              <!-- Default Table -->
              <div class="table-responsive">
                <table class="table  table-bordered">
                  <thead>
                    <tr>
                      <th scope="col">Nama</th>
                      <th scope="col">Logo</th>
                      <th scope="col">Makna Bentuk</th>
                      <th scope="col">Makna Warna</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  @foreach ($identitas as $item)
                      
                  <tbody>
                    <tr>
                      <td>{{$item->nama}}</td>
                      <td> <img src="{{asset("/")}}IdentitasYayasan/{{$item->logo}}" alt="{{$item->logo}}" style="width:40px" class="img-fluid"/></td>
                      <td>{!!Str::limit($item->makna_bentuk, 50, '...')!!}</td>
                      <td>{!!Str::limit($item->makna_warna, 50, '...') !!}</td>
                      <td>
                        <button class="btn btn-info" >Detail</button>
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


@include('admin.layout.footer');
