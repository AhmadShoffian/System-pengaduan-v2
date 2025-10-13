<?php

namespace App\Listeners;

use App\Events\MessageSent;
use App\Jobs\SendUserMessageNotificationJob;

class SendUserMessageNotification
{
    public function handle(MessageSent $event): void
    {
        if (!$event->message->user->isAdmin()) {
            $admins = \App\Models\User::role('super_admin')->pluck('email')->toArray();
            SendUserMessageNotificationJob::dispatch($event->message->id, $admins);
        }
    }
}
