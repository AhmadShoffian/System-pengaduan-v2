<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminMessageNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $chatMessage;
    public $user;

    public function __construct(Message $message)
    {
        $this->chatMessage = $message->load('pengaduan.user', 'user');
        $this->user = $this->chatMessage->pengaduan->user;
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari Admin')
            ->view('emails.admin_message_notification')
            ->with([
                'chatMessage' => $this->chatMessage,
                'user' => $this->user,
            ]);
    }
}
