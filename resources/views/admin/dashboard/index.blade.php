@include('admin.layout.header')
@include('admin.layout.navbar')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-12">
              <div class="card info-card sales-card">

                 <div class="card-body">
                <h5 class="card-title">Selamat Datang, Admin!</h5>
                <p>Selamat datang di halaman admin Yayasan Awwaliyah. Ini adalah tempat di mana Anda dapat mengelola konten, mengupdate informasi, dan mengatur tampilan website </p>
                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-gear"></i>
                  </div>
                  <div class="ps-3">
                    <span class="text-success small pt-1 fw-bold">Anda memiliki akses penuh untuk mengelola website ini.</span>
                    <span class="text-muted small pt-2 ps-1">Semoga harimu menyenangkan dan produktif!</span>
                  </div>
                </div>
              </div>

              </div>
            </div><!-- End Sales Card -->
          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  @include('admin.layout.footer')