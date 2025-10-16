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

    {{-- <main class="main" style="padding-top: 100px;">

       <div class="ml-64 mt-4 px-4 pt-24">
        <!-- Header -->
        <div class="w-full max-w-4xl mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('pengaduan.create.step.one.post') }}" method="POST"
                class="bg-white rounded-lg shadow-lg">
                @csrf
                <div class="border-b px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-700">Form Pengaduan</h2>
                </div>
                <div class="p-6 space-y-6">

                    <!-- Perihal -->
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Perihal <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="perihal" placeholder="Masukkan perihal pengaduan"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                            required>
                    </div>

                    <!-- Alamat Kejadian -->
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Alamat Kejadian <span class="text-red-500">*</span>
                        </label>
                        <textarea name="alamat_kejadian" placeholder="Masukkan alamat lengkap kejadian"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[80px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                            required>{{ old('alamat_kejadian') }}</textarea>
                    </div>

                    <!-- Provinsi & Kota -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Provinsi <span class="text-red-500">*</span>
                            </label>
                            <select id="province" name="province_id" class="border px-3 py-2 rounded-md w-full"
                                required>
                                <option value="">- Pilih Provinsi -</option>
                                @foreach ($provinces as $province)
                                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Kota <span class="text-red-500">*</span>
                            </label>
                            <select id="regency" name="regency_id" class="border px-3 py-2 rounded-md w-full"
                                required>
                                <option value="">- Pilih Kota -</option>
                            </select>
                        </div>
                    </div>

                    <!-- Unit Kejadian -->
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Unit Kejadian <span class="text-red-500">*</span>
                        </label>
                       
                        <select id="unit" name="unit_id" class="border px-3 py-2 rounded-md w-full" required>
                            <option value="">- Pilih Unit -</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Perkiraan Waktu Kejadian -->
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Perkiraan Waktu Kejadian <span class="text-red-500">*</span>
                        </label>
                        <div class="flex flex-col md:flex-row md:items-center gap-4">
                            <input type="date" name="tanggal_kejadian"
                                class="border border-gray-300 rounded-md px-3 py-2 w-full md:w-40 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                value="{{ old('tanggal_kejadian') }}" required>

                            <input type="time" name="waktu_kejadian"
                                class="border border-gray-300 rounded-md px-3 py-2 w-full md:w-40 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                value="{{ old('waktu_kejadian') }}" required>
                        </div>
                    </div>

                    <!-- Uraian -->
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Uraian <span class="text-red-500">*</span>
                        </label>
                        <textarea name="uraian" placeholder="Uraian pengaduan sebaiknya menggambarkan unsur 4W+1H"
                            class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[120px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                            required></textarea>
                        <p class="text-sm text-gray-500">Uraian pengaduan yang akan dikirimkan dapat Anda upload dalam
                            file.
                        </p>
                    </div>

                    <div class="flex justify-end gap-3 pt-4">
                        <button type="reset"
                            class="border border-cyan-600 text-cyan-600 hover:bg-cyan-50 px-8 py-2 rounded-md">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-cyan-600 hover:bg-cyan-700 text-white px-8 py-2 rounded-md shadow">
                            Lanjut
                        </button>
                    </div>
                </div>
            </form><br><br>
        </div>
    </div>
    </main> --}}

    {{-- <main class="main" style="padding-top: 100px;">
        <div class="ml-64 mt-4 px-4 pt-24">
            <!-- Header -->
            <div class="w-full max-w-4xl mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('pengaduan.edit.step.one.post', $pengaduan->id) }}" method="POST"
                    class="bg-white rounded-lg shadow-lg">
                    @csrf
                    <div class="border-b px-6 py-4">
                        <h2 class="text-xl font-semibold text-gray-700">Form Pengaduan</h2>
                    </div>
                    <div class="p-6 space-y-6">

                        <!-- Perihal -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Perihal <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="perihal" placeholder="Masukkan perihal pengaduan"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                value="{{ old('perihal', $pengaduan->perihal) }}" required>
                        </div>

                        <!-- Alamat Kejadian -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Alamat Kejadian <span class="text-red-500">*</span>
                            </label>
                            <textarea name="alamat_kejadian" placeholder="Masukkan alamat lengkap kejadian"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[80px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                required>{{ old('alamat_kejadian', $pengaduan->alamat_kejadian) }}</textarea>
                        </div>

                        <!-- Provinsi & Kota -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="flex items-center gap-1 text-gray-700 font-medium">
                                    Provinsi <span class="text-red-500">*</span>
                                </label>
                                <select id="province" name="province_id" class="border px-3 py-2 rounded-md w-full"
                                    required>
                                    <option value="">- Pilih Provinsi -</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{ $province->id }}"
                                            {{ old('province_id', $pengaduan->province_id) == $province->id ? 'selected' : '' }}>
                                            {{ $province->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="flex items-center gap-1 text-gray-700 font-medium">
                                    Kota <span class="text-red-500">*</span>
                                </label>
                                <select id="regency" name="regency_id" class="border px-3 py-2 rounded-md w-full"
                                    required>
                                    <option value="">- Pilih Kota -</option>
                                    @foreach ($regencies as $regency)
                                        <option value="{{ $regency->id }}"
                                            {{ old('regency_id', $pengaduan->regency_id) == $regency->id ? 'selected' : '' }}>
                                            {{ $regency->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Unit Kejadian -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Unit Kejadian <span class="text-red-500">*</span>
                            </label>
                            <select id="unit" name="unit_id" class="border px-3 py-2 rounded-md w-full"
                                required>
                                <option value="">- Pilih Unit -</option>
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}"
                                        {{ old('unit_id', $pengaduan->unit_id) == $unit->id ? 'selected' : '' }}>
                                        {{ $unit->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Perkiraan Waktu Kejadian -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Perkiraan Waktu Kejadian <span class="text-red-500">*</span>
                            </label>
                            <div class="flex flex-col md:flex-row md:items-center gap-4">
                                <input type="date" name="tanggal_kejadian"
                                    class="border border-gray-300 rounded-md px-3 py-2 w-full md:w-40 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                    value="{{ old('tanggal_kejadian', $pengaduan->tanggal_kejadian) }}" required>

                                <input type="time" name="waktu_kejadian"
                                    class="border border-gray-300 rounded-md px-3 py-2 w-full md:w-40 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                    value="{{ old('waktu_kejadian', \Illuminate\Support\Str::substr($pengaduan->waktu_kejadian, 0, 5)) }}"
                                    required>

                            </div>
                        </div>

                        <!-- Uraian -->
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Uraian <span class="text-red-500">*</span>
                            </label>
                            <textarea name="uraian" placeholder="Uraian pengaduan sebaiknya menggambarkan unsur 4W+1H"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[120px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                                required>{{ old('uraian', $pengaduan->uraian) }}</textarea>
                            <p class="text-sm text-gray-500">Uraian pengaduan yang akan dikirimkan dapat Anda upload
                                dalam
                                file.</p>
                        </div>

                        <div class="flex justify-end gap-3 pt-4">
                            <a href="{{ route('pengaduan.index') }}"
                                class="border border-cyan-600 text-cyan-600 hover:bg-cyan-50 px-8 py-2 rounded-md">
                                Batal
                            </a>
                            <button type="submit"
                                class="bg-cyan-600 hover:bg-cyan-700 text-white px-8 py-2 rounded-md shadow">
                                Lanjut
                            </button>
                        </div>

                    </div>
                </form>

                <script>
                    $(document).ready(function() {
                        $('#province').on('change', function() {
                            let provinceId = $(this).val();
                            if (provinceId) {
                                $.ajax({
                                    url: '/regencies/' + provinceId,
                                    type: 'GET',
                                    dataType: 'json',
                                    success: function(data) {
                                        $('#regency').empty();
                                        $('#regency').append('<option value="">- Pilih Kota -</option>');
                                        $.each(data, function(key, value) {
                                            $('#regency').append('<option value="' + value.id +
                                                '">' + value.name + '</option>');
                                        });
                                    }
                                });
                            } else {
                                $('#regency').empty();
                                $('#regency').append('<option value="">- Pilih Kota -</option>');
                            }
                        });
                    });
                </script>

            </div>
        </div>
    </main> --}}

    {{-- <main class="main" style="padding-top: 100px;">
        <div class="ml-64 mt-4 px-4 pt-24">
            <div class="w-full max-w-4xl mx-auto">
                <form action="{{ route('pengaduan.edit.step.two', $pengaduan->id) }}" method="POST"
                    class="bg-white rounded-lg shadow-lg mb-6">
                    @csrf
                    <div class="border-b px-6 py-4">
                        <h2 class="text-xl font-semibold text-gray-700">Form Tambah Pelapor</h2>
                    </div>
                    <div class="p-6 space-y-6">
                        <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Nama <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nama" placeholder="Masukkan nama"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                NIP <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="nip" placeholder="Masukkan NIP"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Unit <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="unit" placeholder="Masukkan unit"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none">
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center gap-1 text-gray-700 font-medium">
                                Jabatan <span class="text-red-500">*</span>
                            </label>
                            <input type="text" name="jabatan" placeholder="Masukkan jabatan"
                                class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none">
                        </div>

                        <button type="submit"
                            class="bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded-md shadow flex items-center gap-2">
                            <i class="fa fa-plus"></i> Tambah Pelapor
                        </button>
                    </div>
                </form>
                @php
                    $pelaporList = session('pelapor_edit', $pengaduan->pelapor->toArray());
                @endphp

                @if (count($pelaporList))
                    <table class="w-full border mt-4">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2 border">Nama</th>
                                <th class="px-4 py-2 border">NIP</th>
                                <th class="px-4 py-2 border">Unit</th>
                                <th class="px-4 py-2 border">Jabatan</th>
                                <th class="px-4 py-2 border">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelaporList as $index => $p)
                                <tr>
                                    <td class="border px-4 py-2">{{ $p['nama'] ?? 'Anonim' }}</td>
                                    <td class="border px-4 py-2">{{ $p['nip'] ?? '-' }}</td>
                                    <td class="border px-4 py-2">{{ $p['unit'] ?? '-' }}</td>
                                    <td class="border px-4 py-2">{{ $p['jabatan'] ?? '-' }}</td>
                                    <td class="border px-4 py-2 text-center">
                                        <form
                                            action="{{ route('pengaduan.pelapor.remove.session', [$pengaduan->id, $index]) }}"
                                            method="POST" onsubmit="return confirm('Hapus pelapor ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800 font-semibold">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif


                <form action="{{ route('pengaduan.edit.step.three', $pengaduan->id) }}" method="GET"
                    class="bg-white rounded-lg shadow-lg">
                    <div class="border-t px-6 py-4 flex justify-end gap-3">
                        <button type="reset"
                            class="border border-cyan-600 text-cyan-600 hover:bg-cyan-50 px-8 py-2 rounded-md">
                            Batal
                        </button>
                        <button type="submit"
                            class="bg-cyan-600 hover:bg-cyan-700 text-white px-8 py-2 rounded-md shadow">
                            Lanjut
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main> --}}

    <main class="main" style="padding-top: 100px;">
        <div class="w-full min-h-screen flex items-center justify-center px-4 py-12">
            <div class="w-full max-w-6xl">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden">
                    <div class="bg-gradient-to-r from-cyan-50 to-cyan-100 border-b border-cyan-200 px-8 py-6">
                        <h2 class="text-2xl font-bold text-gray-800">Edit Identitas Pelapor</h2>
                        <p class="text-gray-600 mt-1">Perbarui, tambah, atau hapus data pelapor yang terkait dengan
                            pengaduan ini.</p>
                    </div>

                    <div class="p-8 grid grid-cols-1 lg:grid-cols-5 gap-8">

                        <div class="lg:col-span-2">
                            <form action="{{ route('pengaduan.edit.step.two', $pengaduan->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="pengaduan_id" value="{{ $pengaduan->id }}">
                                <div class="space-y-6">
                                    <h3 class="text-lg font-semibold text-gray-700">Tambah Pelapor Baru</h3>
                                    <div>
                                        <label for="nama" class="block text-gray-700 font-medium mb-2">Nama <span
                                                class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                                    class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg></span>
                                            <input type="text" name="nama" id="nama"
                                                placeholder="Nama Lengkap"
                                                class="w-full border border-gray-300 rounded-md pl-10 pr-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none transition"
                                                required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="nip" class="block text-gray-700 font-medium mb-2">NIP <span
                                                class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                                    class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                                    <path fill-rule="evenodd"
                                                        d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                                        clip-rule="evenodd" />
                                                </svg></span>
                                            <input type="text" name="nip" id="nip"
                                                placeholder="Nomor Induk Pegawai"
                                                class="w-full border border-gray-300 rounded-md pl-10 pr-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none transition"
                                                required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="unit" class="block text-gray-700 font-medium mb-2">Unit <span
                                                class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                                    class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                        clip-rule="evenodd" />
                                                </svg></span>
                                            <input type="text" name="unit" id="unit"
                                                placeholder="Unit Kerja"
                                                class="w-full border border-gray-300 rounded-md pl-10 pr-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none transition"
                                                required>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="jabatan" class="block text-gray-700 font-medium mb-2">Jabatan
                                            <span class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3"><svg
                                                    class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.532 1.532 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.532 1.532 0 01-.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106A1.532 1.532 0 0111.49 3.17zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                                        clip-rule="evenodd" />
                                                </svg></span>
                                            <input type="text" name="jabatan" id="jabatan"
                                                placeholder="Posisi Jabatan"
                                                class="w-full border border-gray-300 rounded-md pl-10 pr-3 py-2 focus:ring-2 focus:ring-cyan-500 focus:outline-none transition"
                                                required>
                                        </div>
                                    </div>
                                    <button type="submit" name="tambah_pelapor" value="1"
                                        class="w-full bg-cyan-600 hover:bg-cyan-700 text-white px-5 py-2.5 rounded-md shadow-md hover:shadow-lg transition font-semibold flex items-center justify-center gap-2">
                                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Tambah ke Daftar
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="lg:col-span-3">
                            <h3 class="text-lg font-semibold text-gray-700 mb-6">Daftar Pelapor Saat Ini</h3>
                            <div class="space-y-4">
                                @php
                                    $pelaporList = session('pelapor_edit', $pengaduan->pelapor->toArray());
                                @endphp

                                @if (count($pelaporList))
                                    @foreach ($pelaporList as $index => $p)
                                        <div
                                            class="bg-white border rounded-lg p-4 flex items-center justify-between transition hover:shadow-md animate-fade-in">
                                            <div class="flex items-center gap-4">
                                                <div
                                                    class="bg-cyan-100 text-cyan-700 rounded-full h-10 w-10 flex-shrink-0 flex items-center justify-center font-bold">
                                                    {{ $index + 1 }}</div>
                                                <div>
                                                    <p class="font-bold text-gray-800">{{ $p['nama'] ?? 'Anonim' }}
                                                    </p>
                                                    <p class="text-sm text-gray-500">NIP: {{ $p['nip'] ?? '-' }} |
                                                        {{ $p['jabatan'] ?? '-' }} - {{ $p['unit'] ?? '-' }}</p>
                                                </div>
                                            </div>
                                            <form
                                                action="{{ route('pengaduan.pelapor.remove.session', [$pengaduan->id, $index]) }}"
                                                method="POST"
                                                onsubmit="return confirm('Anda yakin ingin menghapus pelapor ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-gray-400 hover:text-red-600 transition"
                                                    title="Hapus Pelapor">
                                                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="text-center border-2 border-dashed rounded-lg p-12">
                                        <svg class="mx-auto h-12 w-12 text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M15 21v-1a6 6 0 00-1.78-4.125" />
                                        </svg>
                                        <h3 class="mt-2 text-sm font-medium text-gray-900">Belum Ada Pelapor</h3>
                                        <p class="mt-1 text-sm text-gray-500">Gunakan form di sebelah kiri untuk
                                            menambahkan pelapor.</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-50 px-8 py-4 flex justify-between items-center">
                        <a href="{{ route('pengaduan.edit.step.one', $pengaduan->id) }}"
                            class="border border-gray-300 bg-white text-gray-700 hover:bg-gray-100 px-6 py-2 rounded-md transition font-semibold flex items-center gap-2">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Kembali
                        </a>
                        <form action="{{ route('pengaduan.edit.step.three', $pengaduan->id) }}" method="GET">
                            <button type="submit"
                                class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-2 rounded-md shadow-md hover:shadow-lg transition font-semibold flex items-center gap-2">
                                Simpan & Lanjut
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

    <!-- Script  -->
    <script>
        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('hidden');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#province').on('change', function() {
                let provinceId = $(this).val();
                if (provinceId) {
                    $.ajax({
                        url: '/regencies/' + provinceId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#regency').empty();
                            $('#regency').append('<option value="">- Pilih Kota -</option>');
                            $.each(data, function(key, value) {
                                $('#regency').append('<option value="' + value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#regency').empty();
                    $('#regency').append('<option value="">- Pilih Kota -</option>');
                }
            });
        });
    </script>

</body>

</html>
