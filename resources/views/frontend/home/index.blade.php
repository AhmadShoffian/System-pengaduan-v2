<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home - Sistem permohonan</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('images/LOGO-ISI.svg') }}" rel="icon">
    <link href="{{ asset('images/LOGO-ISI.svg') }}" rel="apple-touch-icon">
    <script src="https://cdn.tailwindcss.com"></script>
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

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <style>
        /* Warna khusus menu Pengaduan Saya */
        .navmenu .highlight-menu {
            display: flex;
            /* aktifkan flex */
            align-items: center !important;
            /* vertikal tengah */
            justify-content: center !important;
            /* horizontal tengah */

            color: #fff !important;
            /* warna teks */
            background-color: #e63946;
            /* warna background */
            padding: 8px 15px;
            border-radius: 6px;
            /* font-weight: bold; */
            height: 40px;
            /* tinggi konsisten */
            min-width: 160px;
            /* biar kotaknya agak lebar */
            text-align: center;
            /* fallback */
        }

        .navmenu .highlight-menu:hover {
            background-color: #E43636;
            color: #fff;
        }

        /* Styling untuk dropdown user di header */
        .header .dropdown-menu {
            margin-top: 10px;
            /* Memberi sedikit jarak dari header */
            min-width: 180px;
            /* Agar lebar dropdown tidak terlalu kecil */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 1px solid #eee;
        }

        /* Hanya berlaku untuk layar tablet dan mobile (di bawah 1200px) */
        @media (max-width: 1199.98px) {

            /* Kita akan mengubah urutan visual dari ikon user dan navigasi */

            /* 1. Beri ikon user urutan nomor 2 */
            .header .dropdown {
                order: 2;
            }

            /* 2. Beri burger menu (yang ada di dalam nav) urutan nomor 3 */
            .header .navmenu {
                order: 3;
            }

            /* 3. (Opsional) Beri sedikit jarak antara ikon user dan burger menu */
            .header .navmenu .mobile-nav-toggle {
                margin-left: 10px;
            }
        }

        /*-- Hero Section --*/
.hero {
    width: 100%;
    min-height: 100vh;
    position: relative;
    padding: 120px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    /* [PERUBAHAN] Latar belakang gradasi emas muda */
    background: linear-gradient(135deg, #fdf8e6 0%, #fcf5d5 100%); 
}

/* Struktur pembungkus konten utama di dalam hero.
    Memastikan semua item di dalamnya (h2, p, form, dll) rata tengah.
*/
.hero-content-centered {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.hero h2 {
    margin: 0 0 15px 0;
    font-size: 52px;
    font-weight: 700;
    line-height: 1.2;
    color: #333d42; /* Warna teks gelap agar kontras */
}

.hero p {
    margin: 0 auto 40px auto; /* Margin atas 0, samping auto (pusat), bawah 40px */
    font-size: 19px;
    line-height: 1.6;
    font-weight: 400;
    color: #555e67; /* Warna teks abu-abu gelap */
    max-width: 700px; /* Batasi lebar paragraf agar mudah dibaca */
}

/* Form Pencarian Lacak Pengaduan */
.lacak-pengaduan-container {
    max-width: 600px; /* Lebar maksimal form */
    width: 100%; /* Agar bisa responsif */
    margin: 0 auto 30px auto; /* Margin bawah untuk jarak ke tombol */
    padding: 0;
    text-align: center;
}

.input-group-modern {
    position: relative;
    display: flex;
    align-items: center;
    /* Bayangan lembut dengan latar terang */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08); 
    border-radius: 12px;
    background-color: #ffffff;
}
.input-group-modern .form-control {
    height: 55px;
    border-radius: 12px;
    border: 1px solid #e0e0e0;
    padding-left: 20px;
    padding-right: 60px;
    font-size: 16px;
    color: #333;
    transition: all 0.3s ease-in-out;
}
.input-group-modern .form-control:focus {
    border-color: #0d6efd;
    box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
    outline: none;
}
.input-group-modern .btn-lacak {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    width: 40px;
    height: 40px;
    color: #0d6efd;
    font-size: 20px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: color 0.3s;
}

/* Tombol Buat Pengaduan */
.btn-buat-pengaduan {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 30px;
    border-radius: 50px;
    background: linear-gradient(to right, #4c6ef5, #0d6efd);
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    text-decoration: none;
    box-shadow: 0 8px 20px rgba(13, 110, 253, 0.3);
    transition: all 0.3s ease-in-out;
}

.btn-buat-pengaduan:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 25px rgba(13, 110, 253, 0.4);
    color: #fff;
}

.btn-buat-pengaduan svg {
    width: 24px;
    height: 24px;
}

/*-- Responsive Styles --*/
@media (max-width: 991px) { /* Tablet */
    .hero {
        padding: 100px 0;
    }
    .hero h2 {
        font-size: 42px;
    }
    .hero p {
        font-size: 18px;
    }
}

@media (max-width: 767px) { /* Mobile */
    .hero {
        padding: 80px 0;
        min-height: auto; /* Biarkan tinggi menyesuaikan konten di mobile */
    }
    .hero h2 {
        font-size: 32px;
    }
    .hero p {
        font-size: 16px;
    }
    .lacak-pengaduan-container {
        width: 90%;
    }
    .btn-buat-pengaduan {
        padding: 12px 24px;
        font-size: 16px;
    }
}
    </style>
</head>

<body class="index-page">
    {{-- <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">GP</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#cara-melapor">Cara Melapor</a></li>
                    <li><a href="#team">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{ route('pengaduan.index') }}" class="highlight-menu">Pengaduan Saya</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <div class="dropdown ms-3 ms-xl-0">
                <a href="#" class="d-flex align-items-center text-decoration-none" id="userDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-3 text-white"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Ubah Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header> --}}

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <h1 class="sitename">GP</h1>
                <span>.</span>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#cara-melapor">Cara Melapor</a></li>
                    <li><a href="#team">FAQ</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-lg-none bi bi-list"></i>
            </nav>

            <div class="user-menu d-flex align-items-center">

                <a href="{{ route('pengaduan.index') }}" class="btn-highlight d-none d-lg-block">Pengaduan Saya</a>

                <div class="dropdown ms-3">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle fs-4"></i>
                        <span class="d-none d-md-block ms-2">Halo, Nama User</span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Ubah Profile</a></li>
                        <li><a class="dropdown-item d-lg-none" href="{{ route('pengaduan.index') }}">Pengaduan Saya</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <style>
        .dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            margin-top: 10px;
        }

        .dropdown.show .dropdown-menu {
            display: block;
        }
    </style>

    <script>
        document.getElementById('userDropdown').addEventListener('click', function(e) {
            e.preventDefault();
            this.parentElement.classList.toggle('show');
        });
    </script>




    <main class="main">
        {{-- <section id="hero" class="hero section dark-background">
            <img src="../assets/img/triark.jpg" alt="" data-aos="fade-in">
            <div class="container">
                <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                    <div>
                        <h2>Selamat datang di<br> Whistleblowing System</h2>
                        <p class="mx-auto max-w-3xl text-[19px] leading-relaxed">
                            Whistleblowing System adalah apilkasi yang disediakan oleh Institut Seni Indonesia bagi Anda
                            yang memiliki informasi dan ingin melaportkan suatu perbuatan berindikasi pelanggaran yang
                            terjadi di lingkungan Institut Seni Indonesia Yogyakarta.
                        </p>
                    </div>
                </div> <br>

                <style>
                    .lacak-pengaduan-container {
                        max-width: 700px;

                        margin: 60px auto;

                        padding: 0 15px;
                        text-align: center;
                    }
                    .lacak-pengaduan-container .lacak-title {
                        font-size: 28px;
                        font-weight: 700;
                        color: #212529;
                        margin-bottom: 10px;
                    }
                    .lacak-pengaduan-container .lacak-subtitle {
                        font-size: 16px;
                        color: #6c757d;
                        margin-bottom: 25px;
                    }
                    .input-group-modern {
                        position: relative;
                        display: flex;
                        align-items: center;
                        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
                        border-radius: 12px;
                    }
                    .input-group-modern .form-control {
                        height: 55px;
                        border-radius: 12px;
                        border: 1px solid #ced4da;
                        padding-left: 20px;
                        padding-right: 60px;
                        /* Ruang untuk ikon tombol */
                        font-size: 16px;
                        transition: all 0.3s ease-in-out;
                    }
                    .input-group-modern .form-control:focus {
                        border-color: #0d6efd;
                        box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.2);
                        outline: none;
                    }

                    /* Tombol pencarian yang terintegrasi */
                    .input-group-modern .btn-lacak {
                        position: absolute;
                        right: 8px;
                        top: 50%;
                        transform: translateY(-50%);
                        background: none;
                        border: none;
                        width: 40px;
                        height: 40px;
                        color: #6c757d;
                        font-size: 20px;
                        cursor: pointer;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        transition: color 0.3s;
                    }

                    .input-group-modern .btn-lacak:hover {
                        color: #0d6efd;
                    }

                    @keyframes shake-horizontal {
                        0%,
                        100% {
                            transform: translateX(0);
                        }

                        25% {
                            transform: translateX(-6px);
                        }

                        75% {
                            transform: translateX(6px);
                        }
                    }

                    .input-group-modern .form-control.is-invalid {
                        animation: shake-horizontal 0.3s;
                        border-color: #dc3545;
                    }
                </style>

                <div class="lacak-pengaduan-container">
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form id="lacak-form" action="{{ route('pengaduan.lacak.proses') }}" method="POST" class="mt-4">
                        @csrf <div class="input-group-modern">
                            <input type="text" id="kode-pengaduan" name="kode_pengaduan" class="form-control"
                                placeholder="Masukkan Nomer Pengaduan Anda" required>
                            <button type="submit" class="btn-lacak" aria-label="Lacak">
                                <i class="bi bi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="text-center mt-6" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ route('pengaduan.create.step.one') }}"
                        class="inline-flex items-center gap-2 px-8 py-4 text-lg font-normal rounded-xl bg-gradient-to-r from-indigo-600 to-blue-600 text-white shadow-lg hover:from-indigo-700 hover:to-blue-700 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-indigo-400 transition">
                        <!-- Icon -->
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20h9m-9 0H3m9-8h9m-9 0H3m9-8h9m-9 0H3">
                            </path>
                        </svg>
                        Buat Pengaduan
                    </a>
                </div>
            </div>

        </section> --}}

        <section id="hero" class="hero section"> 
    <div class="container">
        <div class="hero-content-centered" data-aos="fade-up" data-aos-delay="100">

            <h2>Selamat datang di<br> Whistleblowing System</h2>
            <p>
                Whistleblowing System adalah aplikasi yang disediakan oleh Institut Seni Indonesia bagi Anda
                yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang
                terjadi di lingkungan Institut Seni Indonesia Yogyakarta.
            </p>

            
            <div class="lacak-pengaduan-container">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form id="lacak-form" action="{{ route('pengaduan.lacak.proses') }}" method="POST">
                    @csrf
                    <div class="input-group-modern">
                        <input type="text" id="kode-pengaduan" name="kode_pengaduan" class="form-control"
                            placeholder="Masukkan Nomer Pengaduan Anda" required>
                        <button type="submit" class="btn-lacak" aria-label="Lacak">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            
            <div class="mt-4">
                <a href="{{ route('pengaduan.create.step.one') }}"
                    class="btn-buat-pengaduan">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 20h9m-9 0H3m9-8h9m-9 0H3m9-8h9m-9 0H3">
                        </path>
                    </svg>
                    Buat Pengaduan
                </a>
            </div>

        </div>
    </div>
</section>

        <!-- About Section -->
        <section id="about" class="about section py-12">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>Check our About</p>
            </div>
            <div class="container mx-auto px-4" data-aos="fade-up" data-aos-delay="100">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">

                    <!-- Gambar -->
                    <div class="order-1 lg:order-2">
                        <img src="../assets/img/about.jpg" alt="Tentang Pengaduan"
                            class="w-full h-auto max-h-[420px] object-cover rounded-xl shadow-md">
                    </div>

                    <!-- Teks -->
                    <div class="order-2 lg:order-1 space-y-4">
                        <h3 class="text-2xl font-semibold text-gray-800">Unsur Pengaduan</h3>
                        <p class="text-gray-700 text-lg">
                            Pengaduan anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut :
                        </p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start gap-2">
                                <i class="bi bi-check2-all text-green-600 mt-1"></i>
                                <span><strong>What:</strong> Perbuatan berindikasi pelanggaran yang diketahui.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="bi bi-check2-all text-green-600 mt-1"></i>
                                <span><strong>Where:</strong> Dimana perbuatan tersebut dilakukan.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="bi bi-check2-all text-green-600 mt-1"></i>
                                <span><strong>When:</strong> Kapan perbuatan tersebut dilakukan.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="bi bi-check2-all text-green-600 mt-1"></i>
                                <span><strong>Who:</strong> Siapa saja yang terlibat dalam perbuatan tersebut.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="bi bi-check2-all text-green-600 mt-1"></i>
                                <span><strong>How:</strong> Bagaimana perbuatan tersebut dilakukan (modus, cara,
                                    dsb).</span>
                            </li>
                        </ul>
                        <p class="text-gray-600">
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>
                </div>
            </div>
        </section>


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
                <div class="row align-items-center gy-4">

                    <!-- Konten (kiri di desktop) -->
                    <div class="col-lg-6 order-2 order-lg-1 content ps-lg-4">
                        <h3 class="mb-3">Kerahasiaan Pelapor</h3>
                        <p class="fst-poppins">
                            Institut Seni Indeonesia Yogyakarta akan merahasiakan identitas pribadi Anda sebagai
                            whistleblower karena ISI Yogyakarta hanya fokus pada informasi Anda laporkan. <br>
                            Agar Kerahasiaan lebih terjaga, perhatikan hal-hal berikut ini :
                        </p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i>
                                <span>Jika ingin identitas Anda tetap rahasia, jangan
                                    memberitahukan/mengisi data-data pribadi, seperti nama Anda, atau hubungan Anda
                                    dengan pelaku-pelaku.</span>
                            </li>
                            <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i>
                                <span>Jangan memberitahukan / mengisikan data-data /
                                    informasi yang memungkinkan bagi orang lain untuk melakukan pelacakan siapa
                                    Anda.</span>
                            </li>
                            <li class="mb-2"><i class="bi bi-check2-all text-success me-2"></i>
                                <span>Hindari orang lain mengetahui nama samaran
                                    (username), kata sandi (password) serta nomor registrasi Anda.</span>
                            </li>
                        </ul>
                        <p class="mt-3">
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                    </div>

                    <!-- Gambar (kanan di desktop) -->
                    <div class="features-image col-lg-6 order-1 order-lg-2 pe-lg-4" data-aos="fade-up"
                        data-aos-delay="100">
                        <img src="../assets/img/features-bg.jpg" class="img-fluid rounded shadow" alt="">
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

            <img src="../assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        {{-- <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div> --}}
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

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
                        <img src="../assets/img/stats-img.jpg" alt="" class="img-fluid">
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

        </section><!-- /Stats Section --> --}}

        <!-- Testimonials Section -->
        {{-- <section id="testimonials" class="testimonials section dark-background">

            <img src="../assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

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
                                <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
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
                                <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
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
                                <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
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
                                <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
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

        </section><!-- /Testimonials Section --> --}}

        <!-- Team Section -->
        {{-- <section id="team" class="team section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>our Team</p>
            </div><!-- End Section Title -->

            <div class="container">

                <!-- component -->
                <div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
                    <div class="flex flex-col items-center">
                        <h2 class="font-bold text-5xl mt-5 tracking-tight">
                            FAQ
                        </h2>
                        <p class="text-neutral-500 text-xl mt-3">
                            Frequenty asked questions
                        </p>
                    </div>
                    <div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> What is a SAAS platform?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    SAAS platform is a cloud-based software service that allows users to access
                                    and use a variety of tools and functionality.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> How does billing work?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    We offers a variety of billing options, including monthly and annual subscription
                                    plans,
                                    as well as pay-as-you-go pricing for certain services. Payment is typically made
                                    through a credit
                                    card or other secure online payment method.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> Can I get a refund for my subscription?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    We offers a 30-day money-back guarantee for most of its subscription plans. If you
                                    are not
                                    satisfied with your subscription within the first 30 days, you can request a full
                                    refund. Refunds
                                    for subscriptions that have been active for longer than 30 days may be considered on
                                    a case-by-case
                                    basis.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> How do I cancel my subscription?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    To cancel your We subscription, you can log in to your account and navigate to the
                                    subscription management page. From there, you should be able to cancel your
                                    subscription and stop
                                    future billing.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> Can I try this platform for free?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    We offers a free trial of its platform for a limited time. During the trial period,
                                    you will have access to a limited set of features and functionality, but you will
                                    not be charged.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> How do I access documentation?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Documentation is available on the company's website and can be accessed by
                                    logging in to your account. The documentation provides detailed information on how
                                    to use the ,
                                    as well as code examples and other resources.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> How do I contact support?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    If you need help with the platform or have any other questions, you can contact the
                                    company's support team by submitting a support request through the website or by
                                    emailing
                                    support@We.com.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> Do you offer any discounts or promotions?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    We may offer discounts or promotions from time to time. To stay up-to-date on the
                                    latest
                                    deals and special offers, you can sign up for the company's newsletter or follow it
                                    on social media.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary
                                    class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span> How do we compare to other similar services?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>
                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    This platform is a highly reliable and feature-rich service that offers a wide range
                                    of tools and functionality. It is competitively priced and offers a variety of
                                    billing options to
                                    suit different needs and budgets.
                                </p>
                            </details>
                        </div>
                    </div>
                </div>

                <script>
                    // ...
                    // extend: {
                    //   keyframes: {
                    //     fadeIn: {
                    //       "0%": { opacity: 0 },
                    //       "100%": { opacity: 100 },
                    //     },
                    //   },
                    //   animation: {
                    //     fadeIn: "fadeIn 0.2s ease-in-out forwards",
                    //   },
                    // },
                    // ...
                </script>

            </div>

        </section> --}}

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
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const lacakForm = document.getElementById('lacak-form');
            const kodeInput = document.getElementById('kode-pengaduan');

            if (lacakForm) {
                lacakForm.addEventListener('submit', function(event) {
                    // Hapus spasi dari awal dan akhir
                    const kodeValue = kodeInput.value.trim();

                    if (kodeValue === '') {
                        // Hentikan pengiriman form
                        event.preventDefault();

                        // Tambahkan kelas error untuk efek getar
                        kodeInput.classList.add('is-invalid');

                        // Beri tahu pengguna (bisa juga menggunakan elemen HTML, bukan alert)
                        alert('Nomor pengaduan tidak boleh kosong.');

                        // Hapus kelas error setelah animasi selesai agar efek bisa berjalan lagi
                        setTimeout(() => {
                            kodeInput.classList.remove('is-invalid');
                        }, 400);
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                icon: 'success',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                title: 'Gagal!',
                text: "{{ session('error') }}",
                icon: 'error',
                confirmButtonText: 'Coba lagi'
            })
        </script>
    @endif

</body>

</html>
