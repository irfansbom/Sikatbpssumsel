@extends('layout/main')

@section('title','Sistem Katalog PST')

@section('container')
<!DOCTYPE html>
<html lang="en">

<head>

  {{-- 
  <title>Amoeba Bootstrap Template - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords"> --}}

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <img alt="SIKAT" src="{{asset('/pictures/SiKat1.png')}}" width="300" height="100">
      <h2><strong> Sistem Informasi Katalog Statistik Provinsi Sumatera Selatan</strong></h2>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/ged_BPS2.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
            <h3>Informasi Umum</h3>
            <p class="font-italic" style="text-align: justify">
              Badan Pusat Statistik adalah Lembaga Pemerintah Non-Departemen yang bertanggung jawab langsung kepada
              Presiden. Sebelumnya, BPS merupakan Biro Pusat Statistik, yang dibentuk berdasarkan UU Nomor 6 Tahun 1960
              tentang Sensus dan UU Nomer 7 Tahun 1960 tentang Statistik. Sebagai pengganti kedua UU tersebut ditetapkan
              UU Nomor 16 Tahun 1997 tentang Statistik. Berdasarkan UU ini yang ditindaklanjuti dengan peraturan
              perundangan dibawahnya, secara formal nama Biro Pusat Statistik diganti menjadi Badan Pusat
              Statistik. Berdasarkan undang-undang yang telah disebutkan di atas, peranan yang harus dijalankan oleh BPS
              adalah sebagai berikut :
            </p>
            <ul>
              <li style="text-align: justify"><i class="icofont-check-circled"></i> Menyediakan kebutuhan data bagi
                pemerintah dan masyarakat. Data
                ini didapatkan dari sensus atau survey yang dilakukan sendiri dan juga dari departemen atau lembaga
                pemerintahan lainnya sebagai data sekunder.</li>
              <li style="text-align: justify"><i class="icofont-check-circled"></i> Membantu kegiatan statistik di
                departemen, lembaga pemerintah
                atau institusi lainnya, dalam membangun sistem perstatistikan nasional.</li>
              <li style="text-align: justify"><i class="icofont-check-circled"></i> Mengembangkan dan mempromosikan
                standar teknik dan metodologi
                statistik, dan menyediakan pelayanan pada bidang pendidikan dan pelatihan statistik</li>
              <li style="text-align: justify"><i class="icofont-check-circled"></i> Membangun kerjasama dengan institusi
                internasional dan negara
                lain untuk kepentingan perkembangan statistik Indonesia.</li>
            </ul>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Nilai-Nilai Inti</h2>
          <p> Core values (nilai–nilai inti) BPS merupakan pondasi yang kokoh untuk membangun jati diri dan penuntun
            perilaku setiap insan BPS dalam melaksanakan tugas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-business-man-alt-1"></i></div>
            <h4 class="title"><a href="javascript:;">PROFESIONAL</a></h4>
            <p class="description" style="text-align: justify">Mempunyai keahlian dalam bidang tugas yang diemban,
              Memberikan hasil maksimal,
              Mengerjakan setiap tugas secara produktif, dengan sumber daya minimal, Selalu melaukan permbaruan dan/atau
              penyempurnaan melalui proses pembelajaran diri secara terus menerus, Meyakini bahwa setiap pekerjaan
              mempunyai tata urutan proses perkerjaan yang satu menjadi bagian tidak terpisahkan dari pekerjaan yang
              lain
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-handshake-deal"></i></div>
            <h4 class="title"><a href="javascript:;">INTEGRITAS</a></h4>
            <p class="description" style="text-align: justify">Memiliki pengabdian yang tinggi terhadap profesi yang
              diemban dan institusi,
              Melaksanakan pekerjaan sesuai dengan ketentuan yang telah ditetapkan, Satunya kata dengan perbuatan,
              Menghargai ide, saran, pendapat, masukan, dan kritik dari berbagai pihak, Bertanggung jawab dan setiap
              langkahnya terukur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-certificate"></i></div>
            <h4 class="title"><a href="javascript:;">AMANAH</a></h4>
            <p class="description" style="text-align: justify"> Melaksanakan pekerjaan sesuai dengan ketentuan, yang
              tidak hanya didasarkan pada
              logika tetapi juga sekaligus menyentuh dimensi mental spiritual, Melaksanakan semua pekerjaan dengan tidak
              menyimpang dari prinsip moralitas, Melaksanakan tugas tanpa pamrih, menghindari konflik kepentingan
              (pribadi, kelompok, dan golongan), serta mendedikasikan semua tugas untuk perlindungan kehidupan manusia,
              sebagai amal ibadah atau perbuatan untuk Tuhan Yang Maha Esa, Menempatkan sesuatu secara berkeadilan dan
              memberikan haknya</p>
          </div>
          {{-- <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
              mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
              voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum
              soluta nobis est eligendi</p>
          </div> --}}
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section class="call-to-action">
      <div class="container">

        <div class="text-center">
          <h3>Visi</h3>
          <p>Data Akurat, Informasi Tepat</p>

          <h3>Misi</h3>
          <p>Menyediakan data statistik berkualitas melalui kegiatan statistik yang terintegrasi dan berstandar nasional
            maupun internasional. <br>
            Memperkuat Sistem Statistik Nasional yang berkesinambungan melalui pembinaan dan koordinasi di bidang
            statistik. <br>
            Membangun insan statistik yang profesional, berintegritas dan amanah untuk kemajuan perstatistikan.
          </p>
          {{-- <a class="cta-btn" href="#">Call To Action</a> --}}
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Album</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Semua</li>
              <li data-filter=".filter-app">Kegiatan</li>
              <li data-filter=".filter-card">Pelayanan</li>
              <li data-filter=".filter-web">Lingkungan</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 1">App 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 1"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 3">Web 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 3"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 2">App 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 2"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Card 2">Card 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Card 2"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 2">Web 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 2"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox"
                    title="App 3"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Card 1"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Card 3">Card 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 1"><i class="icofont-eye"></i></a>
                </div>
                {{-- <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox"
                  title="Card 3"><i class="icofont-plus"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 1">Web 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox"
                    title="Web 1"><i class="icofont-eye"></i></a>
                  {{-- <a href="portfolio-details.html" title="Details"><i class="icofont-plus"></i></a> --}}
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i
                class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur
                gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus
              a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit
              pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum
                integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt.
                Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in
              nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id
                donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit
                ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et
              tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc
                vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus
                gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel
              pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada
                nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis
                tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas
                fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Our Team</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-1.jpg" alt="">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut
                aut
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-2.jpg" alt="">
              <h4>Sarah Jhinson</h4>
              <span>Product Manager</span>
              <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/team-3.jpg" alt="">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href=""><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Our Team Section --> --}}

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kontak Kami</h2>
          <p>Tim Pelayanan Statistik Terpadu dan Humas Badan Pusat Statistik Provinsi Sumatera Selatan</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="contact-about">
              <h3>Insan Statistik</h3>
              <p>Profesional <br> Integritas <br> Amanah </p>
              <div class="social-links">
                <a href="https://twitter.com/bpssumsel?s=21" target="_blank" class="twitter"><i
                    class="icofont-twitter"></i></a>
                <a href="https://www.facebook.com/bpsprovsumsel" target="_blank" class="facebook"><i
                    class="icofont-facebook"></i></a>
                <a href="https://instagram.com/bpssumsel?igshid=ta4rci6z03lo" target="_blank" class="instagram"><i
                    class="icofont-instagram"></i></a>
                <a href="https://sumsel.bps.go.id/" target="_blank" class="web"><i class="icofont-web"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info">
              <div>
                <i class="icofont-google-map"></i>
                <p>Badan Pusat Statistik Provinsi Sumatera Selatan<br>Jl. Kapten Anwar Sastro No 1694 Palembang,
                  Sumatera Selatan 30129</p>
              </div>

              <div>
                <i class="icofont-envelope"></i>
                <p>bps1600@bps.go.id</p>
              </div>

              <div>
                <i class="icofont-phone"></i>
                <p>Telp (0711) 351665, 318456</p>
              </div>

            </div>
          </div>

          {{-- <div class="col-lg-5 col-md-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                  data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> --}}

        </div>
      </div>
    </section><!-- End Contact Us Section -->

    <!-- ======= Map Section ======= -->
    <section class="map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.441790871244!2d104.74871281482864!3d-2.974821197833425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75dfd4e98b65%3A0x33a20c9d55dd1822!2sBadan%20Pusat%20Statistik%20Provinsi%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1618455553556!5m2!1sid!2sid"
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section><!-- End Map Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BPS Provinsi Sumatera Selatan</span></strong>.
      </div>
      <div class="credits">
        Designed by <a href="">BOMBOM ART</a>
      </div>
    </div>
  </footer><!-- End #footer --> --}}

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  {{-- <script src="assets/vendor/jquery/jquery.min.js"></script> --}}
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
@endsection