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
    <style>
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

<body class="bg-gray-200">
    <nav class="bg-white border-b border-gray-300">
        <div class="flex justify-between items-center px-9">
            <button id="menuBtn">
                <i class="fas fa-bars text-cyan-500 text-lg"></i>
            </button>
            <div class="ml-1">
                <img src="https://www.emprenderconactitud.com/img/POC%20WCS%20(1).png" alt="logo" class="h-20 w-28">
            </div>
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

    <div id="sideNav" class="lg:block hidden bg-white w-64 h-screen fixed rounded-none border-none">
        <div class="p-4 space-y-4">
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

    <div class="ml-64 mt-4 px-4">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="text-secondary fw-bold">Transacciones</h2>
            <a href="{{ route('pengaduan.create.step.one') }}" class="btn btn-primary d-flex align-items-center gap-2">
                <i class="fas fa-plus"></i> Tambah
            </a>
        </div>

        <!-- Table Card -->
        <div class="card shadow-sm rounded-3">
            <!-- Optional Card Header -->
            <div class="card-header bg-light d-flex justify-content-between align-items-center">
                <span class="fw-semibold">Daftar Pengaduan</span>
            </div>

            <div class="card-body p-0">
                <div class="overflow-x-auto">
                    <table id="pengaduanTable" class="table table-hover mb-0 align-middle w-full">
                        <thead class="table-light text-uppercase text-muted small">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Perihal</th>
                                <th>Alamat Kejadian</th>
                                <th>Waktu Kejadian</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengaduans as $index => $item)
                                <tr class="align-middle">
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="fw-semibold">{{ $item->perihal }}</td>
                                    <td>{{ $item->alamat_kejadian }}</td>
                                    <td>{{ $item->waktu_kejadian }}</td>
                                    <td>
                                        @switch($item->status)
                                            @case('Draft')
                                                <span class="badge rounded-pill bg-secondary">{{ $item->status }}</span>
                                            @break

                                            @case('Open')
                                                <span class="badge rounded-pill bg-primary">{{ $item->status }}</span>
                                            @break

                                            @case('Proses')
                                                <span
                                                    class="badge rounded-pill bg-warning text-dark">{{ $item->status }}</span>
                                            @break

                                            @case('Selesai')
                                                <span class="badge rounded-pill bg-success">{{ $item->status }}</span>
                                            @break

                                            @default
                                                <span class="badge rounded-pill bg-light text-dark">{{ $item->status }}</span>
                                        @endswitch
                                    </td>

                                    <td class="text-center">
                                        <a href="{{ route('pengaduan.show', $item->id) }}"
                                            class="btn btn-sm btn-info me-1" title="Detail">
                                            <i class="fas fa-eye"></i>
                                        </a>

                                        {{-- tombol edit hanya tampil jika status bukan Selesai --}}
                                        @if ($item->status !== \App\Enums\StatusPengaduan::Selesai)
                                            @if (in_array($item->status, [\App\Enums\StatusPengaduan::Proses, \App\Enums\StatusPengaduan::Open]))
                                                <a href="{{ route('pengaduan.edit.step.three', $item->id) }}"
                                                    class="btn btn-sm btn-warning me-1" title="Edit Lampiran">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('pengaduan.edit.step.one', $item->id) }}"
                                                    class="btn btn-sm btn-warning me-1" title="Edit">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            @endif
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#chatModal{{ $item->id }}">
                                                Chat
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            @if (count($pengaduans) == 0)
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">
                                        Tidak ada data pengaduan
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Chat -->
    @foreach ($pengaduans as $pengaduan)
        <!-- Tombol buka modal -->
        {{-- <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
            data-bs-target="#chatModal{{ $pengaduan->id }}">
            Chat
        </button> --}}

        <!-- Modal untuk tiap pengaduan -->
        <div class="modal fade" id="chatModal{{ $pengaduan->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chat Pengaduan #{{ $pengaduan->id }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div id="chat-messages-{{ $pengaduan->id }}" class="mb-3"
                            style="max-height:400px; overflow-y:auto; border:1px solid #ddd; padding:10px;">
                        </div>

                        <form class="chat-form" data-id="{{ $pengaduan->id }}" method="POST"
                            action="{{ route('chat.send', $pengaduan) }}">
                            @csrf
                            <div class="input-group">
                                <input type="text" name="body" class="form-control"
                                    placeholder="Tulis pesan..." required>
                                <button class="btn btn-primary" type="submit">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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
            })
        </script>
    @endif

    <script>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // fungsi load messages per pengaduan
            function loadMessages(pengaduanId) {
                fetch(`/api/pengaduan/${pengaduanId}/messages`)
                    .then(response => response.json())
                    .then(messages => {
                        const chatMessages = document.getElementById(`chat-messages-${pengaduanId}`);
                        chatMessages.innerHTML = '';
                        messages.forEach(message => {
                            const messageElement = document.createElement('div');
                            messageElement.classList.add('mb-2');
                            messageElement.innerHTML = `
                                <div class="p-2 rounded-lg ${message.user_id === {{ auth()->id() }} 
                                    ? 'bg-blue-500 text-white text-right' 
                                    : 'bg-gray-200 text-black text-left'}">
                                    <strong>${message.user ? message.user.name : 'Unknown'}</strong><br>
                                    <p>${message.body}</p>
                                    <small class="text-xs">${formatDate(message.created_at)}</small>
                                </div>
                            `;
                            chatMessages.appendChild(messageElement);
                        });
                        chatMessages.scrollTop = chatMessages.scrollHeight;
                    });
            }

            function formatDate(dateString) {
                const date = new Date(dateString);
                return date.toLocaleString('id-ID', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }


            // setiap modal ketika ditampilkan → load pesan
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('shown.bs.modal', function() {
                    let pengaduanId = this.id.replace("chatModal", "");
                    loadMessages(pengaduanId);
                });
            });

            // kirim pesan tanpa reload
            document.querySelectorAll('.chat-form').forEach(form => {
                form.addEventListener("submit", function(e) {
                    e.preventDefault();
                    let pengaduanId = this.dataset.id;
                    let formData = new FormData(this);

                    fetch(this.action, {
                            method: "POST",
                            headers: {
                                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            },
                            body: formData
                        })
                        .then(() => {
                            this.reset();
                            loadMessages(pengaduanId);
                        });
                });
            });
        });
    </script>
    <script>
        // Cek apakah ada session 'success' dari controller
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
            });
        @endif

        // Cek apakah ada session 'error' dari controller
        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Akses Ditolak!',
                text: '{{ session('error') }}', // Pesan dari controller akan muncul di sini
            });
        @endif
    </script>
</body>

</html>
