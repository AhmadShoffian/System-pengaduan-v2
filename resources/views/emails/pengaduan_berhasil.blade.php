{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pengaduan Berhasil</title>
</head>
<body>
    <h2>Halo {{ $pengaduan->user->name }},</h2>
    <p>Pengaduan Anda dengan nomor <b>#{{ $pengaduan->id }}</b> berhasil dibuat.</p>
    <p>Kami akan segera menindaklanjutinya.</p>
    <br>
    <p>Terima kasih,</p>
    <p><b>Tim Pengaduan</b></p>
</body>
</html> --}}


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Permohonan Informasi</title>
</head>

<body style="font-family: Arial, sans-serif; background-color:#f9fafb; padding:20px;">

    <div
        style="max-width:600px; margin:0 auto; background:#fff; border-radius:8px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.05);">

        <!-- Header -->
        <div style="background:#1e40af; color:#fff; padding:16px; text-align:center;">
            <h2 style="margin:0;">Institut Seni Indonesia Yogyakarta</h2>
        </div>

        <!-- Content -->
        <div style="padding:24px; color:#374151;">
            <p>Kepada <strong>{{ $ticket->nama_lengkap }}</strong>,</p>
            <p>
                Permohonan informasi Anda dengan nomor registrasi
                <strong>#{{ $ticket->nomor_ticket }}</strong> telah kami terima dan akan segera kami proses.
            </p>

            <a href="{{ route('permohonan.data', ['nomor_ticket' => $ticket->nomor_ticket]) }}"
                style="display:block; width:100%; background:#f59e0b; color:#fff; text-decoration:none; 
          text-align:center; padding:12px; margin:20px 0; border-radius:6px;">
                Lacak Permohonan Informasi
            </a>



            <p>Terima kasih,<br>Institut Seni Indonesia Yogyakarta</p>
        </div>

        <!-- Footer -->
        <div style="font-size:12px; color:#6b7280; text-align:center; padding:16px; border-top:1px solid #e5e7eb;">
            <p>UPA TIK ISI Yogyakarta</p>
            <p>Jl. Raya Bandung - Sumedang Km. 21, Jatinangor, Sumedang, 45363</p>
        </div>
    </div>

</body>

</html>
