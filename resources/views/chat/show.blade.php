@extends('layouts.app')
<style>
    .card-body.chat-box {
        height: 500px;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
        /* Jarak antar pesan sedikit lebih besar */
        overflow-y: auto;
        background-color: #f8f9fa;
    }

    /* Wadah untuk setiap baris pesan */
    .chat-message {
        display: flex;
        flex-direction: column;
        max-width: 70%;
    }

    /* Gelembung pesan itu sendiri */
    .message-bubble {
        padding: 0.75rem 1rem;
        border-radius: 1rem;
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

    /* -- Gaya untuk pesan yang DIKIRIM (kanan) -- */
    .chat-message.sent {
        align-self: flex-end;
        align-items: flex-end;
    }

    .chat-message.sent .message-bubble {
        background-color: #0d6efd;
        color: white;
        border-bottom-right-radius: 0.25rem;
        /* Sudut khas untuk "ekor" */
    }

    .chat-message.sent .message-bubble strong {
        color: #e9ecef;
        /* Warna nama pengirim agar kontras */
    }

    /* -- Gaya untuk pesan yang DITERIMA (kiri) -- */
    .chat-message.received {
        align-self: flex-start;
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
@section('content')
    <div class="container py-4">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="card-title mb-0">
                    Chat untuk Pengaduan: <strong>{{ $pengaduan->nomor_registrasi }}</strong>
                </h5>
            </div>
            <div id="chat-box" class="card-body chat-box">
                <p class="text-center text-muted">Memuat riwayat percakapan...</p>
            </div>
            <div class="card-footer">
                <form id="message-form" action="{{ route('chat.send', $pengaduan->id) }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" id="message-input" name="body" class="form-control"
                            placeholder="Ketik pesan Anda..." required autocomplete="off">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ... (variabel konstan tetap sama)
            const chatBox = document.getElementById('chat-box');
            const messageForm = document.getElementById('message-form');
            const messageInput = document.getElementById('message-input');
            const pengaduanId = {{ $pengaduan->id }};
            const currentUserId = {{ auth()->id() }};

            function appendMessage(message) {
                const isSender = message.user.id === currentUserId;
                const messageAlignClass = isSender ? 'sent' : 'received';
                const senderName = isSender ? 'Anda' : (message.user ? message.user.name : 'Unknown');
                const messageTime = new Date(message.created_at).toLocaleTimeString('id-ID', {
                    hour: '2-digit',
                    minute: '2-digit'
                });

                // Struktur HTML baru yang lebih rapi
                const messageHtml =
                    `<div class="chat-message ${messageAlignClass}">
                    <div class="message-bubble"><strong>${senderName}</strong>
                        <p>${message.body}</p>
                    </div>
                    <div class="message-meta">
                        <span>${messageTime}</span>
                    </div>
                </div>`;

                chatBox.innerHTML += messageHtml;
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            // 1. Ambil pesan-pesan lama (tidak berubah)
            fetch(`/api/pengaduan/${pengaduanId}/messages`)
                .then(response => response.json())
                .then(messages => {
                    chatBox.innerHTML = '';
                    messages.forEach(message => {
                        appendMessage(message);
                    });
                });

            // 2. Kosongkan input setelah form disubmit
            messageForm.addEventListener('submit', function() {
                setTimeout(() => {
                    messageInput.value = '';
                }, 100);
            });

            // 3. Dengarkan pesan baru secara real-time (tidak berubah)
            window.Echo.private(`chat.${pengaduanId}`)
                .listen('MessageSent', (e) => {
                    appendMessage(e.message);
                });
        });
    </script>
@endpush
