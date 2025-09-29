{{-- <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/lucide-static@latest/font/lucide.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 p-6">
   
</body>

</html> --}}

<!-- component -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POC WCS</title>
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
</head>

<body class="bg-gray-200">
    <nav class="bg-white border-b border-gray-300">
        <div class="flex justify-between items-center px-9">
            <!-- Aumenté el padding aquí para añadir espacio en los lados -->
            <!-- Ícono de Menú -->
            <button id="menuBtn">
                <i class="fas fa-bars text-cyan-500 text-lg"></i>
            </button>

            <!-- Logo -->
            <div class="ml-1">
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="logo" class="h-20 w-28">
            </div>

            <!-- Ícono de Notificación y Perfil -->
            <div class="space-x-4">
                <button>
                    <i class="fas fa-bell text-cyan-500 text-lg"></i>
                </button>

                <!-- Botón de Perfil -->
                <button>
                    <i class="fas fa-user text-cyan-500 text-lg"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Barra lateral -->
    <div id="sideNav" class="lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none">
        <!-- Items -->
        <div class="p-4 space-y-4">
            <!-- Inicio -->
            <a href="{{ route('pengaduan.index') }}" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Pengaduan</span>
            </a>
            <a href="{{ route('profile.edit') }}" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Profile</span>
            </a>
            <a href="{{ route('pengaduan.index') }}" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Logout</span>
            </a>
        </div>
    </div>

    <div class="ml-64 h-screen overflow-y-auto p-4">
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

                                    @default
                                        <span class="px-2 py-1 text-xs font-semibold text-gray-800 bg-gray-100 rounded-full">
                                            {{ $pengaduan->status->value ?? 'Draft' }}
                                        </span>
                                @endswitch
                            </span>
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
                .listen('StatusPengaduanUpdated', (e) => { // Pastikan nama event sesuai (.status.updated jika menggunakan broadcastAs)
                    console.log('Update dari Reverb diterima!', e);
                    tambahkanRiwayatKeTampilan(e.riwayat);
                });
        </script>
    </div>
    <!-- Script  -->
    <script>
        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle('hidden');
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#pengaduanTable').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthMenu: [5, 10, 25, 50],
                language: {
                    url: "https://cdn.datatables.net/plug-ins/1.13.7/i18n/id.json"
                },
                columnDefs: [{
                    orderable: false,
                    targets: [5]
                }]
            });
        });
    </script>
</body>

</html>
