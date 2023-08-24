@include('admin.layout.header');
@include('admin.layout.navbar');

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Detail Profile Pendidikan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
          <li class="breadcrumb-item active">Detail Profile Pendidikan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- Menampilkan pesan sukses jika ada -->
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
              <h5 class="card-title">Detail Profile Pendidikan <b>{{ $profile->pendidikan->nama}}</b></h5>
              <hr>
               <table class="table">
							<tr>
								<td><strong>Nama Sekolah</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->nama_sekolah }}</td>
							</tr>
							<tr>
								<td><strong>NPSN:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->npsn }}</td>
							</tr>
							<tr>
								<td><strong>Status Sekolah:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->status_sekolah }}</td>
							</tr>
							<tr>
								<td><strong>Akreditasi:</strong></td>
								<td style="width: 10px;">:</td>
								<td>"{{ $profile->akreditasi }}"</td>
							</tr>
							<tr>
								<td><strong>Alamat Sekolah:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->alamat_sekolah }}</td>
							</tr>
							<tr>
								<td><strong>No Telepon:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->no_telepon }}</td>
							</tr>
							<tr>
								<td><strong>No Fax:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->no_fax }}</td>
							</tr>
							<tr>
								<td><strong>Email:</strong></td>
								<td style="width: 10px;">:</td>
								<td>{{ $profile->email }}</td>
							</tr>
						</table>  
          </div>
        </div>
      </div>
      </section> 

  </main><!-- End #main -->
  

@include('admin.layout.footer');