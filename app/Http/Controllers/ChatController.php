<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Events\MessageSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMessageNotification;
use App\Jobs\SendUserMessageNotificationJob;

class ChatController extends Controller
{
    // Tampilkan halaman chat untuk user
    public function show(Pengaduan $pengaduan)
    {
        abort_if($pengaduan->user_id !== auth()->id() && !auth()->user()->hasRole('super_admin'), 403);

        return view('chat.show', compact('pengaduan'));
    }

    // Ambil pesan via API
    public function fetchMessages(Pengaduan $pengaduan)
    {
        abort_if($pengaduan->user_id !== auth()->id() && !auth()->user()->hasRole('super_admin'), 403);

        $messages = $pengaduan->messages()
            ->with('user:id,name')
            ->orderBy('created_at')
            ->get();

        return response()->json($messages);
    }

    // Kirim pesan baru
    // public function send(Request $request, Pengaduan $pengaduan)
    // {
    //     abort_if($pengaduan->user_id !== auth()->id() && !auth()->user()->hasRole('super_admin'), 403);

    //     $request->validate(['body' => 'required|string']);

    //     $message = $pengaduan->messages()->create([
    //         'user_id' => auth()->id(),
    //         'body' => $request->body,
    //     ]);

    //     // Broadcast event untuk real-time
    //     broadcast(new MessageSent($message->load('user')))->toOthers();

    //     // Jika pengirim adalah user biasa, kirim email ke semua admin
    //     if (!auth()->user()->hasRole('super_admin')) {
    //         $admins = \App\Models\User::role('super_admin')->pluck('email')->toArray();
    //         foreach ($admins as $email) {
    //             Mail::to($email)->queue(new UserMessageNotification($message));
    //         }
    //     }

    //     return back();
    // }

    public function send(Request $request, Pengaduan $pengaduan)
    {
        try {
            abort_if($pengaduan->user_id !== auth()->id() && !auth()->user()->hasRole('super_admin'), 403);

            $request->validate(['body' => 'required|string']);

            $message = $pengaduan->messages()->create([
                'user_id' => auth()->id(),
                'body' => $request->body,
            ]);

            // Broadcast aman
            try {
                broadcast(new MessageSent($message->load('user')))->toOthers();
            } catch (\Throwable $e) {
                Log::error('Broadcast error: ' . $e->getMessage());
            }

            // Email aman
            // if (!auth()->user()->hasRole('super_admin')) {
            //     $admins = \App\Models\User::role('super_admin')->pluck('email')->toArray();
            //     foreach ($admins as $email) {
            //         try {
            //             Mail::to($email)->send(new UserMessageNotification($message));
            //         } catch (\Throwable $e) {
            //             Log::error('Mail error: ' . $e->getMessage());
            //         }
            //     }
            // }

           if (!auth()->user()->hasRole('super_admin')) {
                $admins = \App\Models\User::role('super_admin')->pluck('email')->toArray();
                SendUserMessageNotificationJob::dispatch($message->id, $admins);
            }

            return back();
        } catch (\Throwable $e) {
            Log::error('Chat send error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
