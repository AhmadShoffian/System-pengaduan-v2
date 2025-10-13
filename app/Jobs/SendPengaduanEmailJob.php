<?php

namespace App\Jobs;

use App\Models\Pengaduan;
use App\Mail\PengaduanBerhasilMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendPengaduanEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected int $pengaduanId;
    protected string $email;

    /**
     * Create a new job instance.
     */
    public function __construct(int $pengaduanId, string $email)
    {
        $this->pengaduanId = $pengaduanId;
        $this->email = $email;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $pengaduan = Pengaduan::find($this->pengaduanId);

        if ($pengaduan) {
            Mail::to($this->email)->send(new PengaduanBerhasilMail($pengaduan));
        }
    }
}
