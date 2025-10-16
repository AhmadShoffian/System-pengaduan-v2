{{-- <!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru dari Admin</title>
</head>
<body>
    <p>Hai {{ $user->name }},</p>
    <p>Anda menerima pesan baru dari Admin:</p>
    <blockquote>{{ $chatMessage->body }}</blockquote>
    <p>Silakan login ke portal untuk membalas pesan ini.</p>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Institut Seni Indonesia Yogyakarta</title>
</head>

<body style="margin:0;padding:0;background-color:#f9fafb;font-family:Arial,sans-serif;">
    <div
        style="max-width:600px;margin:20px auto;background:#ffffff;border-radius:8px;box-shadow:0 2px 6px rgba(0,0,0,0.1);overflow:hidden;">

        <!-- Header -->
        <div style="background-color:#1e3a8a;color:#ffffff;padding:16px;text-align:center;">
            <h1 style="margin:0;font-size:20px;">ISI Yogyakarta</h1>
        </div>

        <!-- Content -->
        <div style="padding:24px;">
            <p style="color:#374151;margin-bottom:12px;">Kepada {{ $user->name }},</p>
            <p style="color:#374151;font-size:14px;line-height:1.5;">
                Permohonan informasi Anda dengan nomor registrasi
                <strong>#{{ $chatMessage->pengaduan->nomor_registrasi }}</strong> terdapat pesan baru dari admin.
            </p>

            <!-- Track Button -->
            <div style="margin: 24px 0; text-align: center;">
                <a href="{{ url('/tickets/' . $chatMessage->pengaduan->id) }}"
                    style="display: block;
            width: 100%;
            background-color: #f59e0b;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            padding: 14px 0;
            border-radius: 6px;
            font-size: 16px;">
                    Lihat Pesan masuk
                </a>
            </div>


            <!-- Terms -->
            <p style="color:#4b5563;font-size:12px;margin:8px 0;">Terima kasih,</p>
            <p style="color:#4b5563;font-size:12px;margin:0;">Institut Seni Indonesia Yogyakarta</p>

            <!-- Footer -->
            <div style="border-top:1px solid #e5e7eb;margin-top:20px;padding-top:12px;text-align:center;">
                <p style="color:#6b7280;font-size:11px;margin:4px 0;">Dapatkan Tips Reguler dan Konsultasi Publik</p>
                <p style="color:#6b7280;font-size:11px;margin:4px 0;">UPA TIK - ISI Yogyakarta</p>
                <p style="color:#6b7280;font-size:11px;margin:4px 0;">Jl. Raya Bandung - Sumedang Km. 21, Jatinangor,
                    Sumedang, 45363</p>
            </div>
        </div>

    </div>
</body>

</html>

