<?php

namespace App\Jobs;

use App\Mail\UserMessageNotification;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendUserMessageNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected int $messageId;
    protected array $adminEmails;

    public function __construct(int $messageId, array $adminEmails)
    {
        $this->messageId = $messageId;
        $this->adminEmails = $adminEmails;
    }

    public function handle(): void
    {
        $message = Message::with('user')->find($this->messageId);

        // Pemeriksaan tetap dipertahankan
        if (!$message) {
            return;
        }

        // Pastikan ada email admin yang akan dikirimi
        if (empty($this->adminEmails)) {
            return;
        }

        // [PERBAIKAN] Kirim ke semua admin sekaligus dan gunakan ->send()
        Mail::to($this->adminEmails)
            ->send(new UserMessageNotification($message));
    }
}