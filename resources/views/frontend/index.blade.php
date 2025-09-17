<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Gp Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1 class="sitename">GP</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Cara Melapor</a></li>
                    <li><a href="#team">FAQ</a></li>
                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>



            <div class="auth-buttons">
                <a class="btn-getstarted" href="{{ route('login') }}">Login</a>
                <a class="btn-getstarted" href="{{ route('register') }}">Buat Akun</a>
            </div>
        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="assets/img/triark.jpg" alt="" data-aos="fade-in">

            <div class="container">

                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <h2>Selamat datang di<br> Whistleblowing System</h2>
                        <p style="font-size: 20px; line-height: 1.5;">Whistleblowing System adalah apilkasi yang
                            disediakan oleh Institut Seni Indonesia bagi Anda
                            yang memiliki informasi dan ingin melaportkan suatu perbuatan berindikasi pelanggaran yang
                            terjadi di lingkungan Institut Seni Indonesia Yogyakarta. <br><br>
                            Anda tidak perlu khawatir terungkapnya identitas diri anda karena Institut Seni Indonesia
                            Yogyakarta MERAHASIAKAN IDENTITAS DIRI ANDA sebagai whistleblower. ISI Yogyakarta menghargai
                            informasi yang Anda laporkan. Fokus kami kepada materi informasi yang Anda laporkan.</p>
                    </div>
                </div> <br>

                <div class="text-center" data-aos="fade-up" data-aos-delay="200">

                    <a href="#" class="btn btn-primary">Buat Akun</a>
                </div>

                <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-bullseye"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-fullscreen-exit"></i>
                            <h3><a href="">Sedare Perspiciatis</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon-box">
                            <i class="bi bi-card-list"></i>
                            <h3><a href="">Magni Dolores</a></h3>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
                        <div class="icon-box">
                            <i class="bi bi-gem"></i>
                            <h3><a href="">Nemos Enimade</a></h3>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 order-2 order-lg-1 content">
                        <h3>Unsur Pegaduan</h3>
                        <p class="fst-italic">
                            Pengaduan anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut :
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>What : Perbuatan berindikasi pelanggaran yang
                                    diketahui.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Where : Dimana perbuatan tersebut
                                    dilakukan.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>When : Kapan perbuatan tersebut
                                    dilakukan.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Who : Siapa saja yang terlibat dalam perbuatan
                                    tersebut.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>How : Bagaimana perbuatan tersebut dilakukan
                                    (modus, cara, dsb).</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Clients Section -->
        {{-- <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section> --}}

        <!-- Features Section -->
        <section id="features" class="features section">

            <div class="container">

                <div class="row gy-4">
                    <div class="features-image col-lg-6 pe-4" data-aos="fade-up" data-aos-delay="100"><img
                            src="assets/img/features-bg.jpg" alt=""></div>

                    <div class="col-lg-6 order-2 order-lg-1 content ps-4">
                        <h3>Kerahasiaan Pelapor</h3>
                        <p class="fst-italic">
                            Institut Seni Indeonesia Yogyakarta akan merahasiakan identitas pribadi Anda sebagai
                            whistleblower karena ISI Yogyakarta hanya fokus pada informasi Anda laporkan. <br>
                            Agar Kerahasiaan lebih terjaga, perhatikan hal-hal berikut ini :
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>Jika ingin identitas Anda tetap rahasia, jangan
                                    memberitahukan/mengisi data-data pribadi, seperti nama Anda, atau hubungan Anda
                                    dengan pelaku-pelaku.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Jangan memberitahukan / mengisikan data-data /
                                    informasi yang memungkinkan bagi orang lain untuk melakukan pelacakan siapa
                                    Anda.</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Hindari orang lain mengetahui nama samaran
                                    (username), kata sandi (password) serta nomor registrasi Anda.</span></li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident
                        </p>
                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check our Services</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-activity"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Nesciunt Mete</h3>
                            </a>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-broadcast"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Eosle Commodi</h3>
                            </a>
                            <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                                hic non ut nesciunt dolorem.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-easel"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Ledo Markt</h3>
                            </a>
                            <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                voluptas adipisci eos earum corrupti.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-bounding-box-circles"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Asperiores Commodit</h3>
                            </a>
                            <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga
                                sit provident adipisci neque.</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-calendar4-week"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Velit Doloremque</h3>
                            </a>
                            <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                                animi at autem alias eius labore.</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-square-text"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Dolori Architecto</h3>
                            </a>
                            <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                                Corrupti recusandae ducimus enim.</p>
                            <a href="service-details.html" class="stretched-link"></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">
            {{-- <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-white to-gray-50 p-4 sm:p-6">
            
            </div> --}}
             <div class="container section-title" data-aos="fade-up">
                <h2>Cara Melapor</h2>
                <p>Tata Cara Melapor</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="max-w-8xl mx-auto">
                        <div class="shadow-xl border-0 bg-white/80 backdrop-blur-sm rounded-xl">
                            <!-- Header -->
                            <div class="pb-6 p-6">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M4 19.5A2.5 2.5 0 016.5 17H20" />
                                            <path d="M20 17V4H8a2 2 0 00-2 2v13" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2
                                            class="text-2xl bg-gradient-to-r from-blue-700 to-blue-900 bg-clip-text text-transparent">
                                            Cara Melapor</h2>
                                        <p class="text-gray-500 mt-1">Panduan lengkap untuk mengajukan pengaduan</p>
                                    </div>
                                </div>
                                <hr class="mt-4 border-gray-200" />
                            </div>
        
                            <!-- Content -->
                            <div class="p-6 space-y-6">
        
                                <!-- STEP TEMPLATE -->
                                <!-- Step {N} -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            1</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Login -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    <path d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Login ke Sistem</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Klik tombol "Login", lalu isikan
                                            Username dan Password Anda</p>
                                    </div>
                                </div>
        
                                <!-- Step 2 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            2</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon User -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    <path d="M12 14c-4.418 0-8 1.79-8 4v2h16v-2c0-2.21-3.582-4-8-4z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Registrasi (Jika Belum Terdaftar)</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">
                                            Jika Anda belum terdaftar, klik tombol "Register" dan isikan data diri Anda lalu
                                            klik tombol "Register", maka Anda akan otomatis login ke Aplikasi
                                        </p>
                                        <ul class="mt-3 ml-11 space-y-2">
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Buat Nama Samaran (username) dan Kata Sandi (password) yang Anda ketahui
                                                    sendiri</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Gunakan nama yang unik dan tidak menggambarkan identitas Anda</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
        
                                <!-- Step 3 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            3</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Chat -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Akses Menu Pengaduan</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Klik menu "Pengaduan" untuk memulai
                                            pengaduan baru</p>
                                    </div>
                                </div>
        
                                <!-- Step 4 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            4</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon File -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M7 2a2 2 0 00-2 2v16a2 2 0 002 2h10a2 2 0 002-2V8l-6-6H7z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Tambah Pengaduan Baru</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Klik tombol "Tambah Pengaduan" untuk
                                            menambahkan pengaduan baru</p>
                                    </div>
                                </div>
        
                                <!-- Step 5 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            5</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Form -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M12 4v16m8-8H4" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Isi Form Pengaduan</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Isi form Tambah Pengaduan sesuai
                                            informasi yang diperlukan, lalu klik tombol "Lanjut"</p>
                                    </div>
                                </div>
        
                                <!-- Step 6 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            6</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Alert -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M12 9v2m0 4h.01M21 12A9 9 0 113 12a9 9 0 0118 0z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Perhatikan Ketentuan</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Perhatikan baik-baik beberapa hal di
                                            bawah ini</p>
                                        <ul class="mt-3 ml-11 space-y-2">
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Semua kolom yang diberi tanda (*) wajib diisi</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Pastikan informasi yang diberikan benar dan lengkap memenuhi unsur <span
                                                        class="bg-gray-100 px-2 py-0.5 rounded border text-sm">4W +
                                                        1H</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
        
                                <!-- Step 7 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            7</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Upload -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2" />
                                                    <path d="M12 12V4m0 0l-4 4m4-4l4 4" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Upload Bukti Pendukung</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Jika anda memiliki bukti dalam bentuk
                                            file seperti foto atau dokumen lain, silahkan dilengkapi di halaman selanjutnya</p>
                                    </div>
                                </div>
        
                                <!-- Step 8 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            8</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon FileCheck -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M9 12l2 2 4-4" />
                                                    <path d="M7 2a2 2 0 00-2 2v16a2 2 0 002 2h10a2 2 0 002-2V8l-6-6H7z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Konfirmasi Lampiran</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Catatan:</p>
                                        <ul class="mt-3 ml-11 space-y-2">
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Setelah membaca petunjuk untuk menyertakan lampiran</span>
                                            </li>
                                            <li class="flex items-start gap-3 text-gray-600">
                                                <div class="w-1.5 h-1.5 rounded-full bg-blue-400 mt-2"></div>
                                                <span>Klik kotak kecil di bawah petunjuk tersebut, dan lanjutkan
                                                    prosesnya</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
        
                                <!-- Step 9 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            9</div>
                                        <div class="w-0.5 h-8 bg-gradient-to-b from-blue-200 to-gray-200 mt-2"></div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Send -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M4 4l16 8-16 8V4z" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Kirim Pengaduan</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Setelah selesai mengisi, silahkan klik
                                            tombol "Kirim" untuk melanjutkan atau klik tombol "Hapus" untuk membatalkan proses
                                            pelaporan anda</p>
                                    </div>
                                </div>
        
                                <!-- Step 10 -->
                                <div class="grid grid-cols-[50px_1fr] gap-4 items-start">
                                    <div class="flex flex-col items-center">
                                        <div
                                            class="w-10 h-10 rounded-full bg-gradient-to-r from-blue-600 to-blue-700 text-white flex items-center justify-center shadow-lg font-semibold">
                                            10</div>
                                    </div>
                                    <div class="pb-4">
                                        <div class="flex items-center gap-3 mb-2">
                                            <div
                                                class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
                                                <!-- Icon Check -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <h3 class="font-semibold text-gray-900">Cetak Nomor Register</h3>
                                        </div>
                                        <p class="text-gray-700 leading-relaxed ml-11">Halaman berikutnya memberikan kesempatan
                                            bagi anda yang ingin mencetak nomor register pengaduan</p>
                                    </div>
                                </div>
        
                                <!-- Important Notes -->
                                <hr class="my-8 border-gray-200" />
                                <div
                                    class="rounded-xl bg-gradient-to-r from-amber-50 to-orange-50 border border-amber-200 p-6">
                                    <div class="flex items-center gap-2 mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-amber-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M12 9v2m0 4h.01M21 12A9 9 0 113 12a9 9 0 0118 0z" />
                                        </svg>
                                        <h4 class="text-lg font-semibold text-amber-800">Penting untuk Diingat</h4>
                                    </div>
                                    <ul class="space-y-3 text-amber-900">
                                        <li class="flex items-start gap-3">
                                            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></div>
                                            <span class="font-semibold">Catat dan simpan dengan baik Nama Samaran (username)
                                                dan Kata Sandi (password)</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></div>
                                            <span class="font-semibold">Simpan dengan baik nomor register pengaduan dan jangan
                                                sampai hilang untuk mengetahui status!</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></div>
                                            <span>Tindak lanjut pengaduan yang Anda sampaikan.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></div>
                                            <span>Kementerian Kesehatan akan mengirimkan respon atas laporan Anda melalui
                                                saluran yang telah Anda cantumkan dalam Form Pengaduan.</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <div class="w-1.5 h-1.5 rounded-full bg-amber-500 mt-2"></div>
                                            <span>Apabila pengaduan yang Anda sampaikan belum memenuhi kriteria untuk
                                                ditindaklanjuti.</span>
                                        </li>
                                    </ul>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-lg-5">
                        <img src="assets/img/stats-img.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <h3 class="fw-bold fs-2 mb-3">Voluptatem dignissimos provident quasi</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                        </p>

                        <div class="row gy-4">

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-emoji-smile flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="232"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-journal-richtext flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="521"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-headset flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="1453"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                            <div class="col-lg-6">
                                <div class="stats-item d-flex">
                                    <i class="bi bi-people flex-shrink-0"></i>
                                    <div>
                                        <span data-purecounter-start="0" data-purecounter-end="32"
                                            data-purecounter-duration="1" class="purecounter"></span>
                                        <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                                    </div>
                                </div>
                            </div><!-- End Stats Item -->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">

            <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat
                                        irure amet legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                    alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem dolore labore illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                    alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam
                                        esse veniam culpa fore nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Team Section -->
        <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>our Team</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                        data-aos-delay="400">
                        <div class="team-member">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter-x"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus"
                        frameborder="0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>info@example.com</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer dark-background">

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 footer-about">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <span class="sitename">GP</span>
                        </a>
                        <div class="footer-contact pt-3">
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
                            <p><strong>Email:</strong> <span>info@example.com</span></p>
                        </div>
                        <div class="social-links d-flex mt-4">
                            <a href=""><i class="bi bi-twitter-x"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-3 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Product Management</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#"> Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-12 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                    value="Subscribe"></div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">GP</strong> <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
