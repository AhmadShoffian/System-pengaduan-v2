<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Permohonan - Edit permohonan</title>
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

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <!-- jQuery (wajib untuk DataTables) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

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
            color: #333d42;
            /* Warna teks gelap agar kontras */
        }

        .hero p {
            margin: 0 auto 40px auto;
            /* Margin atas 0, samping auto (pusat), bawah 40px */
            font-size: 19px;
            line-height: 1.6;
            font-weight: 400;
            color: #555e67;
            /* Warna teks abu-abu gelap */
            max-width: 700px;
            /* Batasi lebar paragraf agar mudah dibaca */
        }

        /* Form Pencarian Lacak Pengaduan */
        .lacak-pengaduan-container {
            max-width: 600px;
            /* Lebar maksimal form */
            width: 100%;
            /* Agar bisa responsif */
            margin: 0 auto 30px auto;
            /* Margin bawah untuk jarak ke tombol */
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
        @media (max-width: 991px) {

            /* Tablet */
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

        @media (max-width: 767px) {

            /* Mobile */
            .hero {
                padding: 80px 0;
                min-height: auto;
                /* Biarkan tinggi menyesuaikan konten di mobile */
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

        /* Mengatur area modal body sebagai chat box */
        .modal-body.chat-box {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            /* Jarak antar pesan sedikit lebih besar */
            background-color: #f8f9fa;
            /* Latar belakang abu-abu sangat terang */
        }

        /* Wadah untuk setiap baris pesan */
        .chat-message {
            display: flex;
            flex-direction: column;
            max-width: 70%;
            /* Pesan tidak terlalu lebar */
        }

        /* Gelembung pesan itu sendiri */
        .message-bubble {
            padding: 0.75rem 1rem;
            border-radius: 1rem;
            /* Sudut yang bulat */
            line-height: 1.5;
            word-wrap: break-word;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        }

        .message-bubble strong {
            display: block;
            font-size: 0.85em;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .message-bubble p {
            margin: 0;
            font-size: 0.95em;
        }

        /* Waktu di bawah gelembung */
        .message-meta {
            font-size: 0.75rem;
            color: #6c757d;
            margin-top: 5px;
            padding: 0 5px;
        }

        /* -- Gaya untuk pesan yang DIKIRIM (Anda/User) - KANAN -- */
        .chat-message.sent {
            align-self: flex-end;
            /* Posisikan ke kanan */
            align-items: flex-end;
        }

        .chat-message.sent .message-bubble {
            background-color: #0d6efd;
            /* Warna primer Bootstrap */
            color: white;
            border-bottom-right-radius: 0.25rem;
            /* Sudut khas untuk "ekor" */
        }

        .chat-message.sent .message-bubble strong {
            color: #e9ecef;
        }

        /* -- Gaya untuk pesan yang DITERIMA (Admin) - KIRI -- */
        .chat-message.received {
            align-self: flex-start;
            /* Posisikan ke kiri */
            align-items: flex-start;
        }

        .chat-message.received .message-bubble {
            background-color: #ffffff;
            /* Gelembung putih */
            color: #212529;
            border: 1px solid #e9ecef;
            border-bottom-left-radius: 0.25rem;
            /* Sudut khas untuk "ekor" */
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="index-page">
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
                    <a href="#" id="userDropdown"
                        class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">

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

    <main class="main" style="padding-top: 100px;">

        <div class="container my-5">
            {{-- HEADER HALAMAN --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="h3 fw-bold text-dark">Detail Pengaduan</h1>
                <a href="{{ route('pengaduan.index') }}" class="btn btn-light border" title="Tutup">
                    <i class="fas fa-times"></i>
                </a>
            </div>

            {{-- KARTU DETAIL INFORMASI --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-light py-3">
                    <h5 class="mb-0 fw-semibold"><i class="fas fa-info-circle me-2"></i>Detail Informasi</h5>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        {{-- Kolom Kiri --}}
                        <div class="col-lg-6">
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">No. Register:</div>
                                <div class="col-sm-7 fw-medium">{{ $pengaduan->nomor_registrasi ?? '-' }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Status:</div>
                                <div class="col-sm-7">
                                    <span class="badge rounded-pill bg-primary">{{ $pengaduan->status->value ?? 'Draft' }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Alasan Ditolak:</div>
                                <div class="col-sm-7">{{ $pengaduan->alasan_tolak ?? 'N/A' }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Perihal:</div>
                                <div class="col-sm-7">{{ $pengaduan->perihal }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 text-muted">Uraian:</div>
                                <div class="col-sm-7">{{ $pengaduan->uraian }}</div>
                            </div>
                        </div>
                        {{-- Kolom Kanan --}}
                        <div class="col-lg-6 mt-3 mt-lg-0">
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Alamat Kejadian:</div>
                                <div class="col-sm-7">{{ $pengaduan->alamat_kejadian }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Kota/Kab:</div>
                                <div class="col-sm-7">{{ $pengaduan->regency->name ?? '-' }}</div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Provinsi:</div>
                                <div class="col-sm-7">{{ $pengaduan->province->name ?? '-' }}</div>
                            </div>
                             <div class="row mb-3">
                                <div class="col-sm-5 text-muted">Unit Kejadian:</div>
                                <div class="col-sm-7">{{ $pengaduan->unit->name ?? '-' }}</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 text-muted">Waktu Kejadian:</div>
                                <div class="col-sm-7">{{ $pengaduan->waktu_kejadian ? $pengaduan->waktu_kejadian->format('d F Y, H:i') : '-' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- KARTU PELAPOR (TABLE RESPONSIVE) --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-light py-3">
                    <h5 class="mb-0 fw-semibold"><i class="fas fa-user-friends me-2"></i>Pelapor</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pengaduan->pelapor as $index => $p)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $p->nama ?? '-' }}</td>
                                    <td>{{ $p->nip ?? '-' }}</td>
                                    <td>{{ $p->unit ?? '-' }}</td>
                                    <td>{{ $p->jabatan ?? '-' }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-3">Tidak ada data pelapor.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- KARTU LAMPIRAN --}}
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-light py-3">
                    <h5 class="mb-0 fw-semibold"><i class="fas fa-paperclip me-2"></i>Lampiran</h5>
                </div>
                <div class="card-body p-4">
                    @if (isset($lampiranGabungan) && count($lampiranGabungan))
                        <ul class="list-group mb-4">
                            @foreach ($lampiranGabungan as $lampiran)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="{{ $lampiran['is_temp'] ? Storage::url($lampiran['file_path']) : asset('storage/' . $lampiran['file_path']) }}" target="_blank" class="text-decoration-none">
                                    {{ $lampiran['file_name'] }}
                                </a>
                                {{-- Pastikan route untuk hapus sudah benar --}}
                                <form action="#" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus lampiran ini?')">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </li>
                            @endforeach
                        </ul>
                    @endif

                    {{-- Form Tambah Lampiran --}}
                    @if (in_array($pengaduan->status->name, ['Open', 'Proses', 'Ditolak']))
                        <form action="{{ route('pengaduan.edit.step.three.add.lampiran', $pengaduan->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="lampiran" class="form-label">Tambah Lampiran Baru:</label>
                                <input type="file" name="lampiran[]" id="lampiran" class="form-control" multiple>
                            </div>
                            <button type="submit" class="btn btn-secondary">
                                <i class="fas fa-plus me-2"></i>Tambah
                            </button>
                        </form>
                    @endif

                    <hr class="my-4">

                    {{-- Form Simpan Perubahan --}}
                    <form action="{{ route('pengaduan.edit.step.three.post', $pengaduan->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>

            {{-- Tombol Kembali --}}
            <div class="mt-4">
                <a href="{{ route('pengaduan.index') }}" class="btn btn-light border">
                    <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar
                </a>
            </div>
        </div>

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
