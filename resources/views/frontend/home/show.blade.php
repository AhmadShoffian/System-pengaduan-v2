<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/lucide-static@latest/font/lucide.css" rel="stylesheet">
</head>

<body class="min-h-screen bg-gray-50 p-6">
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
                <!-- Kolom Kiri -->
                <div class="space-y-3">
                    <div class="flex">
                        <span class="text-gray-600 w-40">No. Register</span>
                        <span>{{ $pengaduan->nomor_registrasi?? '-' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Status Pengaduan</span>
                        <span>{{ $pengaduan->status ?? 'Draft' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Sumber</span>
                        <span>{{ $pengaduan->sumber ?? 'Web' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Perihal</span>
                        <span>{{ $pengaduan->perihal }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Alamat Kejadian</span>
                        <span>{{ $pengaduan->alamat_kejadian }}</span>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-3">
                    <div class="flex">
                        <span class="text-gray-600 w-40">Kota</span>
                        <span>{{ $pengaduan->regency->name ?? '-' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Provinsi</span>
                        <span>{{ $pengaduan->province->name ?? '-' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Unit Kejadian</span>
                        <span>{{ $pengaduan->unit->name ?? '-' }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Perkiraan Waktu Kejadian</span>
                        <span>{{ $pengaduan->tanggal_kejadian }} {{ $pengaduan->waktu_kejadian }}</span>
                    </div>
                    <div class="flex">
                        <span class="text-gray-600 w-40">Uraian</span>
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
                                <td colspan="5" class="text-center text-gray-500 py-3">Tidak ada data pelapor</td>
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
                <h2 class="flex items-center gap-2 font-semibold text-gray-700">📋 Riwayat</h2>
            </div>
            <div class="p-6 grid grid-cols-2 gap-4">
                <div class="flex justify-between">
                    <span class="text-gray-600">Tanggal</span>
                    <span>{{ $pengaduan->created_at }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-gray-600">Uraian Status</span>
                    <span>{{ $pengaduan->status ?? 'Draft' }}</span>
                </div>
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
</body>

</html>
