{{-- <!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload Lampiran</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">

  <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg">
    <!-- Header -->
    <div class="border-b px-6 py-4">
      <h2 class="text-xl font-semibold text-gray-700">Pengaduan</h2>
    </div>

    <!-- Body -->
    <div class="p-6 space-y-6">
      <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2">
        <i class="fa fa-paperclip text-gray-500"></i> Lampiran
      </h3>

      <form action="{{ route('pengaduan.create.step.three.post') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <!-- Upload File -->
        <div class="space-y-2">
          <label for="lampiran" class="block text-gray-700 font-medium">File Lampiran</label>
          <input type="file" id="lampiran" name="lampiran"
            class="w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer focus:outline-none focus:ring-1 focus:ring-cyan-500">
          <p class="text-sm text-gray-500 mt-2">
            File yang diupload sebaiknya memuat uraian detil, ataupun hal yang terkait dengan pengaduan. <br>
            Ukuran file dibatasi sampai dengan <strong>20MB</strong>. <br>
            Penamaan file terbatas untuk huruf, angka, spasi, simbol <code>-</code> dan <code>_</code> saja. <br>
            Contoh: <span class="font-semibold">nama_file-pengaduan_01.docx</span>
          </p>
        </div>

        <!-- Tambah Lampiran -->
        <button type="button"
          class="bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded-md shadow flex items-center gap-2">
          <i class="fa fa-plus"></i> Tambah Lampiran
        </button>

        <hr class="my-4">

        <!-- Tombol Navigasi -->
        <div class="flex justify-between">
          <div class="flex gap-3">
            <a href="#"
              class="flex items-center gap-2 text-cyan-600 hover:text-cyan-700 text-sm font-medium">
              <i class="fa fa-arrow-left"></i> Sebelumnya
            </a>
            <a href="#"
              class="flex items-center gap-2 text-red-600 hover:text-red-700 text-sm font-medium">
              <i class="fa fa-times"></i> Batal
            </a>
          </div>
          <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow flex items-center gap-2">
            <i class="fa fa-save"></i> Buat Pengaduan
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
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
</head>

<body class="bg-gray-200">
    {{-- <nav class="bg-white border-b border-gray-300">
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
    </nav> --}}

    <nav class="bg-white border-b border-gray-300 fixed top-0 left-0 w-full z-50">
        <div class="flex justify-between items-center px-9">
            <!-- Menu Button -->
            <button id="menuBtn">
                <i class="fas fa-bars text-cyan-500 text-lg"></i>
            </button>

            <!-- Logo -->
            <div class="ml-1">
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="logo" class="h-20 w-28">
            </div>

            <!-- Notifikasi & Profil -->
            <div class="space-x-4">
                <button>
                    <i class="fas fa-bell text-cyan-500 text-lg"></i>
                </button>
                <button>
                    <i class="fas fa-user text-cyan-500 text-lg"></i>
                </button>
            </div>
        </div>
    </nav>


    <!-- Barra lateral -->
    <div id="sideNav" class="lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none pt-24">
        <!-- Items -->
        <div class="p-4 space-y-4">
            <!-- Inicio -->
            <a href="{{ route('pengaduan.index') }}" aria-label="dashboard"
                class="relative px-4 py-3 flex items-center space-x-4 rounded-lg text-white bg-gradient-to-r from-sky-600 to-cyan-400">
                <i class="fas fa-home text-white"></i>
                <span class="-mr-1 font-medium">Pengaduan</span>
            </a>

            {{-- <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-wallet"></i>
                <span>Billetera</span>
            </a>
            <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-exchange-alt"></i>
                <span>Transacciones</span>
            </a>
            <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-user"></i>
                <span>Mi cuenta</span>
            </a>
            <a href="#" class="px-4 py-3 flex items-center space-x-4 rounded-md text-gray-500 group">
                <i class="fas fa-sign-out-alt"></i>
                <span>Cerrar sesión</span>
            </a> --}}
        </div>
    </div>

    <div class="ml-64 mt-4 px-4 pt-24">
        <!-- Header -->
        <div class="w-full max-w-4xl mx-auto">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg">
                <!-- Header -->
                <div class="border-b px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-700">Pengaduan</h2>
                </div>

                <!-- Body -->
                <div class="p-6 space-y-6">
                    <h3 class="text-lg font-semibold text-gray-700 flex items-center gap-2">
                        <i class="fa fa-paperclip text-gray-500"></i> Lampiran
                    </h3>

                    @if ($lampiranGabungan && count($lampiranGabungan))
                        <div class="mb-4 space-y-2">
                            <label class="block text-gray-700 font-medium">Lampiran Saat Ini:</label>
                            <ul class="space-y-1">
                                @foreach ($lampiranGabungan as $lampiran)
                                    <li class="flex items-center justify-between border p-2 rounded">
                                        {{-- Link --}}
                                        <a href="{{ $lampiran['is_temp'] ? Storage::url($lampiran['file_path']) : asset('storage/' . $lampiran['file_path']) }}"
                                            target="_blank" class="text-blue-600 hover:underline">
                                            {{ $lampiran['file_name'] }}
                                        </a>

                                        {{-- Tombol Hapus --}}
                                        @if ($pengaduan->status !== 'Proses')
                                            @if ($lampiran['is_temp'])
                                                {{-- Hapus dari session --}}
                                                <form
                                                    action="{{ route('pengaduan.edit.step.three.remove.lampiran', ['id' => $pengaduan->id, 'index' => $lampiran['id']]) }}"
                                                    method="POST" onsubmit="return confirm('Hapus lampiran ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            @else
                                                {{-- Hapus dari database --}}
                                                <form action="{{ route('pengaduan.file.delete', $lampiran['id']) }}"
                                                    method="POST" onsubmit="return confirm('Hapus lampiran ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-800">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {{-- Form Tambah Lampiran --}}
                    @if ($pengaduan->status === 'Proses')
                        <form action="{{ route('pengaduan.edit.step.three.add.lampiran', $pengaduan->id) }}"
                            method="POST" enctype="multipart/form-data" class="space-y-4">
                            @csrf
                            <input type="file" name="lampiran[]" multiple
                                class="w-full text-sm text-gray-700 border border-gray-300 rounded-md cursor-pointer focus:outline-none focus:ring-1 focus:ring-cyan-500">
                            <button type="submit"
                                class="bg-cyan-500 hover:bg-cyan-600 text-white px-5 py-2 rounded-md shadow flex items-center gap-2">
                                <i class="fa fa-plus"></i> Tambah Lampiran
                            </button>
                        </form>
                    @endif

                    <hr class="my-4">

                    {{-- Tombol Simpan Perubahan --}}
                    <form action="{{ route('pengaduan.edit.step.three.post', $pengaduan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md shadow flex items-center gap-2">
                            <i class="fa fa-save"></i> Simpan Perubahan
                        </button>
                    </form>
                </div>
            </div>
        </div>
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
