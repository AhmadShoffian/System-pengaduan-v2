<?php

namespace App\Jobs;

use App\Mail\AdminMessageNotification;
use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendAdminMessageNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Message $message;

    /**
     * Create a new job instance.
     */
    public function __construct(Message $message)
    {
        // Hindari data besar / relasi berat, simpan ID saja
        $this->message = $message;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $message = $this->message->load('pengaduan.user', 'user');

        $user = $message->pengaduan?->user;

        if (!$user || !$user->email) {
            return; // Tidak kirim kalau tidak ada email
        }

        Mail::to($user->email)->send(new AdminMessageNotification($message));
    }
}
