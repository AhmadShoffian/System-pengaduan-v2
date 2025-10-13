<?php

namespace App\Mail;

use App\Models\Pengaduan;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PengaduanBerhasilMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Pengaduan $pengaduan;

    public function __construct(Pengaduan $pengaduan)
    {
        $this->pengaduan = $pengaduan;
    }

    public function build()
    {
        return $this->subject('Pengaduan Berhasil Dibuat')
            ->view('emails.pengaduan_berhasil')
            ->with([
                'pengaduan' => $this->pengaduan,
            ]);
    }
}
