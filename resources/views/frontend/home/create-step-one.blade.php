{{-- <!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pengaduan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 py-10">

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

                
                <div class="space-y-2">
                    <label class="flex items-center gap-1 text-gray-700 font-medium">
                        Perihal <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="perihal" placeholder="Masukkan perihal pengaduan"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                        required>
                </div>

             
                <div class="space-y-2">
                    <label class="flex items-center gap-1 text-gray-700 font-medium">
                        Alamat Kejadian <span class="text-red-500">*</span>
                    </label>
                    <textarea name="alamat_kejadian" placeholder="Masukkan alamat lengkap kejadian"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[80px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                        required>{{ old('alamat_kejadian') }}</textarea>
                </div>

                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="space-y-2">
                        <label class="flex items-center gap-1 text-gray-700 font-medium">
                            Provinsi <span class="text-red-500">*</span>
                        </label>
                        <select id="province" name="province_id" class="border px-3 py-2 rounded-md w-full" required>
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
                        <select id="regency" name="regency_id" class="border px-3 py-2 rounded-md w-full" required>
                            <option value="">- Pilih Kota -</option>
                        </select>
                    </div>
                </div>

                
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

             
                <div class="space-y-2">
                    <label class="flex items-center gap-1 text-gray-700 font-medium">
                        Uraian <span class="text-red-500">*</span>
                    </label>
                    <textarea name="uraian" placeholder="Uraian pengaduan sebaiknya menggambarkan unsur 4W+1H"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 min-h-[120px] resize-none focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                        required></textarea>
                    <p class="text-sm text-gray-500">Uraian pengaduan yang akan dikirimkan dapat Anda upload dalam file.
                    </p>
                </div>

              
                <div class="flex gap-3 pt-4">
                    <button type="submit"
                        class="bg-cyan-600 hover:bg-cyan-700 text-white px-8 py-2 rounded-md shadow">Lanjut</button>
                    <button type="reset"
                        class="border border-cyan-600 text-cyan-600 hover:bg-cyan-50 px-8 py-2 rounded-md">Batal</button>
                </div>

            </div>
        </form>
    </div>

</body>

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
                        {{-- <select name="unitKejadian"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-1 focus:ring-cyan-500 focus:outline-none"
                        required>
                        <option value="">Pilih unit kejadian</option>
                        <option>Rumah Sakit Umum</option>
                        <option>Rumah Sakit Khusus</option>
                        <option>Puskesmas</option>
                        <option>Klinik</option>
                        <option>Apotek</option>
                        <option>Laboratorium</option>
                        <option>Instalasi Farmasi</option>
                    </select> --}}
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
