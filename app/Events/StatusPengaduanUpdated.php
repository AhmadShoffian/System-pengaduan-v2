<?php

namespace App\Events;

use App\Models\RiwayatPengaduan;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast; // Pastikan ini di-import
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

// --- PERBAIKAN: Tambahkan 'implements ShouldBroadcast' di sini ---
class StatusPengaduanUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $riwayat;

    /**
     * Create a new event instance.
     */
    public function __construct(RiwayatPengaduan $riwayat)
    {
        $this->riwayat = $riwayat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('pengaduan.' . $this->riwayat->pengaduan_id),
        ];
    }
}