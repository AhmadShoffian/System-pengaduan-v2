<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/images/LOGO-ISI.svg') }}">
    <title>ISI | Sistem-Pengaduan</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

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
    <style>
        /* Styling untuk Hero Section */
        .hero-area {
            padding: 100px 0;
            overflow: hidden;
            background-color: #f8f9fa;
            /* Warna latar yang soft */
        }

        .hero-content .hero-title {
            font-size: 2.8rem;
            /* Ukuran font lebih besar */
            font-weight: 700;
            line-height: 1.3;
            color: #212529;
            /* Warna teks gelap */
            margin-bottom: 20px;
        }

        .hero-content .hero-text {
            font-size: 1.1rem;
            color: #6c757d;
            /* Warna teks abu-abu */
            margin-bottom: 30px;
        }

        /* Container untuk Form Pencarian */
        .search-form-container {
            max-width: 550px;
        }

        /* Form Pencarian Modern */
        .modern-search-form {
            display: flex;
            align-items: center;
            position: relative;
            background: #fff;
            border-radius: 50px;
            /* Membuat bentuk kapsul */
            padding: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            /* Efek bayangan yang lembut */
        }

        .modern-search-form .search-icon {
            position: absolute;
            left: 25px;
            color: #adb5bd;
            /* Warna ikon abu-abu */
        }

        .modern-search-form input[type="text"] {
            flex-grow: 1;
            border: none;
            outline: none;
            padding: 12px 20px 12px 50px;
            /* Padding kiri untuk memberi ruang bagi ikon */
            font-size: 16px;
            background: transparent;
            width: 100%;
        }

        .modern-search-form .btn-search {
            border: none;
            background-color: #0d6efd;
            /* Warna biru primer */
            color: white;
            font-weight: 500;
            padding: 12px 30px;
            border-radius: 50px;
            /* Bentuk kapsul */
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .modern-search-form .btn-search:hover {
            background-color: #0b5ed7;
            /* Warna biru lebih gelap saat hover */
        }

        /* Penyesuaian gambar agar tidak terlalu besar */
        .hero-image img {
            max-width: 90%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        /* Responsivitas untuk mobile */
        @media (max-width: 991px) {
            .hero-area {
                text-align: center;
            }

            .search-form-container {
                margin: 0 auto;
            }

            .hero-image {
                margin-top: 40px;
            }

            .hero-content .hero-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 991.98px) {
            .logo {
                display: none !important;
            }
        }
    </style>

</head>

<body class="index-page">

    {{-- <header id="header" class="header d-flex align-items-center fixed-top">
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
                <a class="btn-getstarted" href="{{ route('signin') }}">Login</a>
                <a class="btn-getstarted" href="{{ route('signup') }}">Buat Akun</a>
            </div>
        </div>
    </header> --}}

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
                <img src="{{ asset('images/sispeng.svg') }}" alt="Logo ISI">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Cara Melapor</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-lg-none bi bi-list"></i>
            </nav>

            <div class="auth-buttons">
                <a class="btn-login" href="{{ route('signin') }}">Login</a>
                <a class="btn-signup" href="{{ route('signup') }}">Buat Akun</a>
            </div>

        </div>
    </header>



    <main class="main">
        <section id="home" class="hero-area style1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="hero-content wow fadeInLeft" data-wow-delay=".3s">
                            <h1 class="hero-title">Helpdesk UPA TIK ISI Yogyakarta</h1>
                            <p class="hero-text">
                                Komitmen kami untuk memberikan dukungan terkait sistem informasi, jaringan, perangkat
                                keras, dan layanan TIK lainnya guna mendukung kelancaran kegiatan akademik dan
                                administratif.
                            </p>

                            <div class="search-form-container">
                                <form action="{{ route('pengaduan.lacak.proses') }}" method="get"
                                    class="modern-search-form">
                                    <i class="fas fa-search search-icon"></i>
                                    <input type="text" name="ticket_number" id="ticket_number"
                                        placeholder="Lacak status tiket Anda di sini...">
                                    <button type="submit" class="btn-search">Cari</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- Kolom Gambar --}}
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                            <img src="{{ asset('images/Group.png') }}" alt="Helpdesk Illustration" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

        </section>
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

        </section>

        <!-- Services Section -->
        <section id="services" class="services section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Fitur Utama Sistem</h2>
                <p>Kami Menjamin Keamanan dan Kerahasiaan Anda</p>
            </div>
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Pelaporan Anonim & Rahasia</h3>
                            </a>
                            <p>Identitas Anda sepenuhnya terlindungi. Anda dapat mengirimkan laporan tanpa rasa khawatir
                                karena sistem kami menjamin kerahasiaan data pribadi Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-key-fill"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Keamanan Data Terenkripsi</h3>
                            </a>
                            <p>Semua informasi dan bukti yang Anda kirimkan dienkripsi secara end-to-end, memastikan
                                hanya pihak berwenang yang dapat mengakses laporan Anda.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Sistem Pelacakan Laporan</h3>
                            </a>
                            <p>Setelah melapor, Anda akan menerima nomor tiket unik untuk memantau status dan
                                perkembangan penanganan laporan Anda secara transparan.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-balance-fill"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Investigasi Independen</h3>
                            </a>
                            <p>Setiap laporan yang masuk akan ditangani dan ditindaklanjuti oleh tim investigasi yang
                                independen, objektif, dan profesional.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Perlindungan Bagi Pelapor</h3>
                            </a>
                            <p>Kami berkomitmen memberikan perlindungan penuh terhadap segala bentuk intimidasi atau
                                tindakan balasan (retaliasi) kepada pelapor.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="bi bi-chat-quote-fill"></i>
                            </div>
                            <a href="#" class="stretched-link">
                                <h3>Komunikasi Dua Arah</h3>
                            </a>
                            <p>Sistem menyediakan sarana komunikasi yang aman antara Anda dan tim investigasi untuk
                                permintaan informasi tambahan tanpa mengungkap identitas.</p>
                        </div>
                    </div>
                </div>

            </div>

        </section>

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

        </section>

        <!-- Portfolio Section -->
        <section id="cara-melapor" class="portfolio section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Cara Melapor</h2>
                <p>Panduan Lengkap untuk Mengajukan Pengaduan</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-4 p-md-5">

                        <div class="row g-0 mb-3">
                            <div class="col-auto text-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle shadow"
                                    style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">1</div>
                                <div class="border-primary mx-auto mt-2"
                                    style="width: 2px; height: 4rem; background: linear-gradient(to bottom, #0d6efd, #e9ecef);">
                                </div>
                            </div>
                            <div class="col pb-4 ms-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-box-arrow-in-right fs-4 text-primary me-3"></i>
                                    <h5 class="mb-0">Login ke Sistem</h5>
                                </div>
                                <p class="mb-0">Klik tombol "Login", lalu isikan Username dan Password Anda yang
                                    telah terdaftar.</p>
                            </div>
                        </div>

                        <div class="row g-0 mb-3">
                            <div class="col-auto text-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle shadow"
                                    style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">2</div>
                                <div class="border-primary mx-auto mt-2"
                                    style="width: 2px; height: 7rem; background: linear-gradient(to bottom, #0d6efd, #e9ecef);">
                                </div>
                            </div>
                            <div class="col pb-4 ms-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-person-plus-fill fs-4 text-primary me-3"></i>
                                    <h5 class="mb-0">Registrasi (Jika Belum Terdaftar)</h5>
                                </div>
                                <p>Jika belum memiliki akun, klik "Register". Isi data yang diperlukan dan pastikan
                                    untuk:</p>
                                <ul class="list-unstyled mt-2 ps-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Buat
                                        Nama Samaran (username) dan kata sandi yang unik.</li>
                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i>Hindari penggunaan
                                        nama yang dapat mengidentifikasi diri Anda.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="row g-0 mb-3">
                            <div class="col-auto text-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle shadow"
                                    style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">3</div>
                                <div class="border-primary mx-auto mt-2"
                                    style="width: 2px; height: 4rem; background: linear-gradient(to bottom, #0d6efd, #e9ecef);">
                                </div>
                            </div>
                            <div class="col pb-4 ms-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-file-earmark-plus-fill fs-4 text-primary me-3"></i>
                                    <h5 class="mb-0">Isi Formulir Pengaduan</h5>
                                </div>
                                <p>Klik "Buat Pengaduan Baru", isi semua kolom yang wajib diisi, dan pastikan informasi
                                    memenuhi unsur <strong>4W+1H</strong> (What, Where, When, Who, How).</p>
                            </div>
                        </div>

                        <div class="row g-0 mb-3">
                            <div class="col-auto text-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle shadow"
                                    style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">4</div>
                                <div class="border-primary mx-auto mt-2"
                                    style="width: 2px; height: 4rem; background: linear-gradient(to bottom, #0d6efd, #e9ecef);">
                                </div>
                            </div>
                            <div class="col pb-4 ms-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-paperclip fs-4 text-primary me-3"></i>
                                    <h5 class="mb-0">Unggah Bukti Pendukung</h5>
                                </div>
                                <p>Lampirkan file bukti seperti foto, dokumen, atau rekaman untuk memperkuat laporan
                                    Anda.</p>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col-auto text-center">
                                <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle shadow"
                                    style="width: 45px; height: 45px; font-weight: bold; font-size: 1.1rem;">5</div>
                            </div>
                            <div class="col pb-4 ms-3">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-send-check-fill fs-4 text-primary me-3"></i>
                                    <h5 class="mb-0">Kirim & Simpan Nomor Registrasi</h5>
                                </div>
                                <p class="mb-0">Setelah selesai, klik "Kirim". **Catat dan simpan dengan baik Nomor
                                    Registrasi** yang muncul untuk melacak status pengaduan Anda.</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="alert alert-warning d-flex align-items-center" role="alert">
                            <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                            <div>
                                <h5 class="alert-heading">Penting untuk Diingat!</h5>
                                <p class="mb-0">Selalu jaga kerahasiaan **Username, Password, dan Nomor Registrasi**
                                    Anda. Gunakan nomor registrasi untuk memantau tindak lanjut laporan melalui sistem
                                    ini.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <!-- Stats Section -->
        {{-- <section id="stats" class="stats section">

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

        </section> --}}

        <!-- Testimonials Section -->
        {{-- <section id="testimonials" class="testimonials section dark-background">

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

        </section> --}}

        <!-- Team Section -->
        <section id="faq" class="faq section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Pertanyaan Umum (FAQ)</h2>
                <p>Temukan jawaban atas pertanyaan umum mengenai Sistem Pelaporan Pelanggaran (Whistleblowing System)
                    kami.</p>
            </div>
            <div class="container">

                <div class="w-full max-w-3xl mx-auto bg-white">
                    <div class="grid divide-y divide-neutral-200">

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Apa itu Sistem Pelaporan Pelanggaran (Whistleblowing System)?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Ini adalah saluran komunikasi yang aman dan rahasia untuk melaporkan dugaan
                                    pelanggaran hukum, peraturan perusahaan, kode etik, atau norma kesusilaan yang
                                    terjadi di lingkungan perusahaan. Sistem ini adalah bagian dari komitmen kami untuk
                                    menjaga integritas dan tata kelola yang baik.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Jenis pelanggaran apa yang bisa dilaporkan?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Anda dapat melaporkan berbagai tindakan, termasuk namun tidak terbatas pada:
                                    korupsi, penipuan (fraud), pencurian aset, penyalahgunaan wewenang, konflik
                                    kepentingan, suap, pelanggaran keamanan dan keselamatan kerja (K3), serta pelecehan
                                    dan diskriminasi.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Siapa saja yang dapat membuat laporan?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Seluruh pihak, baik internal (karyawan, direksi, dewan komisaris) maupun eksternal
                                    (mitra bisnis, pemasok, konsultan, pelanggan) yang mengetahui atau mencurigai adanya
                                    pelanggaran dapat menggunakan sistem ini.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Apakah identitas pelapor akan dirahasiakan?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Ya. Perusahaan menjamin kerahasiaan penuh atas identitas pelapor. Semua laporan akan
                                    ditangani oleh tim independen yang ditunjuk khusus untuk menjaga objektivitas dan
                                    kerahasiaan informasi.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Bisakah saya melapor secara anonim (tanpa nama)?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Tentu. Sistem ini memungkinkan Anda untuk membuat laporan secara anonim. Namun, kami
                                    mendorong Anda untuk memberikan identitas agar tim dapat menghubungi Anda jika
                                    memerlukan klarifikasi atau informasi tambahan untuk memperlancar proses
                                    investigasi.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Apakah saya akan dilindungi dari tindakan balasan (retaliasi)?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Perusahaan berkomitmen penuh untuk melindungi setiap pelapor yang beritikad baik
                                    dari segala bentuk tindakan balasan, seperti intimidasi, pelecehan, penurunan
                                    jabatan, atau pemecatan. Perlindungan ini dijamin dalam kebijakan perusahaan.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Bagaimana cara saya membuat laporan yang efektif?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Untuk membuat laporan yang efektif, mohon jelaskan unsur 5W+1H: **What** (apa
                                    pelanggarannya), **Who** (siapa yang terlibat), **Where** (di mana terjadinya),
                                    **When** (kapan terjadinya), **Why** (mengapa itu terjadi), dan **How** (bagaimana
                                    modusnya). Sertakan juga bukti pendukung jika ada.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Bukti apa saja yang perlu saya lampirkan?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Sertakan bukti relevan yang Anda miliki, seperti dokumen, email, foto, video,
                                    rekaman, atau nama saksi lain yang mengetahui kejadian tersebut. Semakin kuat bukti
                                    awal yang Anda berikan, semakin mudah bagi tim untuk menindaklanjuti laporan.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Apa yang terjadi setelah saya mengirimkan laporan?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Setiap laporan yang masuk akan melalui proses penelaahan awal oleh tim yang
                                    berwenang. Jika laporan memenuhi kriteria dan didukung bukti awal yang cukup,
                                    laporan akan dilanjutkan ke tahap investigasi lebih lanjut sesuai prosedur internal
                                    yang berlaku.
                                </p>
                            </details>
                        </div>

                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span>Bagaimana saya bisa memantau status laporan saya?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Setelah mengirim laporan melalui sistem online, Anda akan menerima sebuah nomor
                                    registrasi atau kode unik. Anda dapat menggunakan kode tersebut untuk masuk kembali
                                    ke sistem dan memantau status atau perkembangan penanganan laporan Anda secara aman
                                    dan anonim.
                                </p>
                            </details>
                        </div>

                    </div>
                </div>

            </div>

        </section>

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
                            <img src="{{ asset('images/sispeng.svg') }}" alt="logo Sistem pengaduan">
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
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Institut Seni Indonesia Yogyakarta</strong>
                    <span>All Rights Reserved</span>
                </p>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you've purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                    Designed by <a href="https://isi.ac.id/">UPA TIK ISI Yogyakarta</a>
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
