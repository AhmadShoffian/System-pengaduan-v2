<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserMessageNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $userMessage;
    public $user;

    public function __construct(Message $message)
    {
        // Pastikan relasi user sudah load
        $this->userMessage = $message->load('user');
        $this->user = $this->userMessage->user;
    }

    public function build()
    {
        return $this->subject('Pesan Baru dari User')
                    ->view('emails.user_message_notification')
                    ->with([
                        'userMessage' => $this->userMessage,
                        'user' => $this->user,
                    ]);
    }
}
