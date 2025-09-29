<?php

use App\Models\Pengaduan;
use App\Models\User; // <-- Impor model User
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
*/

// Channel notifikasi default Laravel, sudah benar.
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('pengaduan.{pengaduan}', function (User $user, Pengaduan $pengaduan) {
    // Izinkan user jika dia pemilik pengaduan atau seorang admin
    return $user->id === $pengaduan->user_id || $user->isAdmin();
});