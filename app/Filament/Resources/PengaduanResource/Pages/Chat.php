<?php

namespace App\Filament\Resources\PengaduanResource\Pages;

use App\Models\Pengaduan;
use App\Events\MessageSent;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMessageNotification;
use App\Jobs\SendAdminMessageNotificationJob;
use App\Filament\Resources\PengaduanResource; // <-- PASTIKAN INI DI-IMPORT

class Chat extends Page
{
    // --- INI ADALAH BARIS WAJIB YANG HILANG DARI KODE ANDA ---
    protected static string $resource = PengaduanResource::class;

    protected static string $view = 'filament.resources.pengaduan-resource.pages.chat';

    protected static ?string $title = 'Ruang Obrolan';

    public Pengaduan $record;

    // Properti untuk Livewire
    public $messages = [];
    public $newMessage = '';

    // Method yang dipanggil saat halaman dimuat
    public function mount(Pengaduan $record): void
    {
        $this->record = $record;
        static::authorizeResourceAccess();

        // Muat pesan pertama kali saat halaman dibuka
        $this->fetchMessages();
    }

    // Method untuk mengambil pesan dari database
    public function fetchMessages()
    {
        $this->messages = $this->record->messages()->with('user')->get();
        // Kirim event ke browser untuk trigger auto-scroll
        $this->dispatch('messages-updated');
    }

    // Method yang dipanggil saat admin mengirim pesan
    public function sendMessage()
    {
        if (empty($this->newMessage)) {
            return;
        }

        $message = $this->record->messages()->create([
            'user_id' => auth()->id(), // ID admin yang sedang login
            'body' => $this->newMessage,
        ]);

        // Siarkan event agar user di sisi lain menerima pesan secara real-time
        broadcast(new MessageSent($message->load('user')))->toOthers();

        dispatch(new SendAdminMessageNotificationJob($message));

        // Kosongkan input
        $this->newMessage = '';

        // Muat ulang pesan
        $this->fetchMessages();
    }
}
