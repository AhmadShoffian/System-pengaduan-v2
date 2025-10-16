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

         <div class="ml-64 p-4">
        <!-- Header -->
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h1 class="text-2xl text-gray-800">Pengaduan</h1>
                <a href="{{ route('pengaduan.index') }}" class="p-2 rounded hover:bg-gray-100">
                    <i data-lucide="x" class="w-4 h-4"></i>
                </a>
            </div>

            <!-- Detail Informasi -->
            <div class="mb-6 bg-white rounded-lg shadow border">
                <div class="border-b px-6 py-4">
                    <h2 class="flex items-center gap-2 font-semibold text-gray-700">📋 Detail Informasi</h2>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-3">
                        <div class="flex">
                            <span class="text-gray-600 w-40">No. Register:</span>
                            <span>{{ $pengaduan->nomor_registrasi ?? '-' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Status Pengaduan:</span>
                            <span id="status-badge-container">
                                @switch($pengaduan->status)
                                    @case(App\Enums\StatusPengaduan::Proses)
                                        <span
                                            class="px-2 py-1 text-xs font-semibold text-yellow-800 bg-yellow-100 rounded-full">
                                            {{ $pengaduan->status->value }}
                                        </span>
                                    @break

                                    @case(App\Enums\StatusPengaduan::Selesai)
                                        <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
                                            {{ $pengaduan->status->value }}
                                        </span>
                                    @break

                                    @case('Ditolak')
                                        <span class="px-2 py-1 text-xs font-semibold text-red-800 bg-red-100 rounded-full">
                                            {{ $pengaduan->status }}
                                        </span>
                                    @break

                                    @default
                                        <span class="px-2 py-1 text-xs font-semibold text-gray-800 bg-gray-100 rounded-full">
                                            {{ $pengaduan->status->value ?? 'Draft' }}
                                        </span>
                                @endswitch
                            </span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Alasan ditolak:</span>
                            <span>{{ $pengaduan->alasan_tolak ?? 'N/A' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Sumber:</span>
                            <span>{{ $pengaduan->sumber ?? 'Web' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Perihal:</span>
                            <span>{{ $pengaduan->perihal }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Alamat Kejadian:</span>
                            <span>{{ $pengaduan->alamat_kejadian }}</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="flex">
                            <span class="text-gray-600 w-40">Kota:</span>
                            <span>{{ $pengaduan->regency->name ?? '-' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Provinsi:</span>
                            <span>{{ $pengaduan->province->name ?? '-' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Unit Kejadian:</span>
                            <span>{{ $pengaduan->unit->name ?? '-' }}</span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Perkiraan Waktu Kejadian:</span>
                            <span>
                                {{ $pengaduan->waktu_kejadian ? $pengaduan->waktu_kejadian->format('d F Y, \P\u\k\u\l H:i') : '-' }}
                            </span>
                        </div>
                        <div class="flex">
                            <span class="text-gray-600 w-40">Uraian:</span>
                            <span>{{ $pengaduan->uraian }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pelapor -->
            <div class="mb-6 bg-white rounded-lg shadow border">
                <div class="border-b px-6 py-4">
                    <h2 class="flex items-center gap-2 font-semibold text-gray-700">👥 Pelapor</h2>
                </div>
                <div class="p-6 overflow-x-auto">
                    <table class="w-full border border-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 text-left">No.</th>
                                <th class="px-3 py-2 text-left">Nama</th>
                                <th class="px-3 py-2 text-left">NIP</th>
                                <th class="px-3 py-2 text-left">Unit</th>
                                <th class="px-3 py-2 text-left">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengaduan->pelapor as $index => $p)
                                <tr class="border-t">
                                    <td class="px-3 py-2">{{ $index + 1 }}</td>
                                    <td class="px-3 py-2">{{ $p->nama ?? '-' }}</td>
                                    <td class="px-3 py-2">{{ $p->nip ?? '-' }}</td>
                                    <td class="px-3 py-2">{{ $p->unit ?? '-' }}</td>
                                    <td class="px-3 py-2">{{ $p->jabatan ?? '-' }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-gray-500 py-3">Tidak ada data pelapor
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Lampiran -->
            <div class="mb-6 bg-white rounded-lg shadow border">
                <div class="border-b px-6 py-4">
                    <h2 class="flex items-center gap-2 font-semibold text-gray-700">📎 Lampiran</h2>
                </div>
                <div class="p-6 overflow-x-auto">
                    <table class="w-full border border-gray-200 text-sm">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-3 py-2 text-left">No.</th>
                                <th class="px-3 py-2 text-left">File</th>
                                <th class="px-3 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($pengaduan->files as $index => $file)
                                <tr class="border-t">
                                    <td class="px-3 py-2">{{ $index + 1 }}</td>
                                    <td class="px-3 py-2">
                                        <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank"
                                            class="text-blue-600 hover:underline">
                                            {{ $file->file_name }}
                                        </a>
                                    </td>
                                    <td class="px-3 py-2">
                                        <a href="{{ asset('storage/' . $file->file_path) }}" download
                                            class="p-2 rounded hover:bg-gray-100">
                                            <i data-lucide="download" class="w-4 h-4"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-gray-500 py-3">Tidak ada lampiran</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Riwayat -->
            <div class="mb-6 bg-white rounded-lg shadow border">
                <div class="border-b px-6 py-4">
                    <h2 class="flex items-center gap-2 font-semibold text-gray-700">📋 Riwayat Pengaduan</h2>
                </div>

                <div class="p-6" id="riwayat-timeline">
                    @forelse($pengaduan->riwayat as $item)
                        <div class="flex gap-4 mb-6">
                            <div class="flex flex-col items-center">
                                <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                                <div class="flex-grow w-px bg-gray-300"></div>
                            </div>
                            <div>
                                <span class="font-semibold text-gray-800">{{ $item->status }}</span>
                                <p class="text-sm text-gray-600">{{ $item->deskripsi }}</p>
                                <small class="text-gray-400">{{ $item->created_at->format('d F Y, H:i') }} WIB</small>
                            </div>
                        </div>
                    @empty
                        <p class="text-gray-500 text-center">Belum ada riwayat perubahan.</p>
                    @endforelse
                </div>
            </div>

            <!-- Back Button -->
            <div class="flex justify-start">
                <a href="{{ route('pengaduan.index') }}"
                    class="flex items-center gap-2 border border-gray-300 rounded px-4 py-2 hover:bg-gray-100">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Kembali
                </a>
            </div>
        </div>

        <script src="https://unpkg.com/lucide@latest"></script>
        <script>
            lucide.createIcons();
        </script>
        <script type="module">
            const pengaduanId = {{ $pengaduan->id }};

            // Fungsi untuk menambahkan elemen riwayat baru ke timeline
            function tambahkanRiwayatKeTampilan(riwayat) {
                const timelineContainer = document.getElementById('riwayat-timeline');
                const emptyMessage = timelineContainer.querySelector('.empty-message');
                const statusContainer = document.getElementById('status-badge-container');
                if (statusContainer) {
                    let badgeClass = 'text-gray-800 bg-gray-100'; // Default untuk Draft
                    if (riwayat.status === 'Proses') {
                        badgeClass = 'text-yellow-800 bg-yellow-100';
                    } else if (riwayat.status === 'Selesai') {
                        badgeClass = 'text-green-800 bg-green-100';
                    }
                    statusContainer.innerHTML = `
            <span class="px-2 py-1 text-xs font-semibold ${badgeClass} rounded-full">
                ${riwayat.status}
            </span>
        `;
                }

                // Jika ada pesan "Belum ada riwayat", hapus dulu
                if (emptyMessage) {
                    emptyMessage.remove();
                }

                // Format tanggal menggunakan JavaScript agar konsisten
                const tanggal = new Date(riwayat.created_at);
                const options = {
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                };
                const tanggalFormatted = tanggal.toLocaleDateString('id-ID', options) + ' WIB';

                // Buat elemen HTML baru untuk item timeline
                const riwayatBaruHTML = `
            <div class="flex gap-4 mb-6">
                <div class="flex flex-col items-center">
                    <div class="w-4 h-4 bg-blue-500 rounded-full"></div>
                    <div class="flex-grow w-px bg-gray-300"></div>
                </div>
                <div>
                    <span class="font-semibold text-gray-800">${riwayat.status}</span>
                    <p class="text-sm text-gray-600">${riwayat.deskripsi}</p>
                    <small class="text-gray-400">${tanggalFormatted}</small>
                </div>
            </div>
        `;
                // Sisipkan item baru di paling atas timeline
                timelineContainer.insertAdjacentHTML('afterbegin', riwayatBaruHTML);
            }

            // Tambahkan kelas pada pesan "empty" agar mudah ditemukan
            const emptyParagraph = document.querySelector('#riwayat-timeline > p');
            if (emptyParagraph) {
                emptyParagraph.classList.add('empty-message');
            }

            // Dengarkan di channel privat
            Echo.private(`pengaduan.${pengaduanId}`)
                .listen('StatusPengaduanUpdated', (
                e) => { // Pastikan nama event sesuai (.status.updated jika menggunakan broadcastAs)
                    console.log('Update dari Reverb diterima!', e);
                    tambahkanRiwayatKeTampilan(e.riwayat);
                });
        </script>
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
