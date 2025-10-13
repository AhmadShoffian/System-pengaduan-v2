<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Forgot Password') }} - {{ config('app.name', 'Laravel') }}</title>

    <style>
        /* Import Font dari Google Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');

        /* Reset dan Body Styling */
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
            /* Warna latar abu-abu muda */
            color: #374151;
            display: flex;
            min-height: 100vh;
            align-items: center;
            justify-content: center;
        }

        /* Kontainer Utama */
        .auth-container {
            width: 100%;
            max-width: 450px;
            padding: 2rem;
        }

        /* Logo */
        .auth-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .auth-logo svg {
            width: 5rem;
            /* 80px */
            height: 5rem;
            /* 80px */
            color: #6b7280;
        }

        /* Kartu Form */
        .auth-card {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 0.75rem;
            /* Sudut lebih membulat */
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* Tipografi di dalam Kartu */
        .auth-card h2 {
            text-align: center;
            font-size: 1.5rem;
            /* 24px */
            font-weight: 700;
            color: #111827;
            margin-top: 0;
            margin-bottom: 0.5rem;
        }

        .auth-card .auth-description {
            text-align: center;
            font-size: 0.875rem;
            /* 14px */
            color: #6b7280;
            margin-bottom: 2rem;
        }

        /* Status Message (e.g., "Password reset link sent!") */
        .session-status {
            background-color: #d1fae5;
            color: #065f46;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
            font-weight: 500;
        }

        /* Form Styling */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .input-label {
            display: block;
            font-weight: 500;
            color: #374151;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 0.75rem;
            /* 12px */
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }

        .text-input {
            width: 100%;
            padding: 0.75rem 1rem 0.75rem 2.5rem;
            /* Padding kiri untuk ikon */
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .text-input:focus {
            outline: none;
            border-color: #3b82f6;
            /* Biru */
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
        }

        .input-error {
            color: #ef4444;
            /* Merah */
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }

        /* Tombol Utama */
        .primary-button {
            width: 100%;
            background-color: #3b82f6;
            /* Biru */
            color: #ffffff;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 0.5rem;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .primary-button:hover {
            background-color: #2563eb;
        }

        /* Link Bawah */
        .bottom-link {
            text-align: center;
            margin-top: 1.5rem;
        }

        .bottom-link a {
            font-size: 0.875rem;
            color: #6b7280;
            text-decoration: underline;
            transition: color 0.2s;
        }

        .bottom-link a:hover {
            color: #111827;
        }
    </style>
</head>

<body>
    <div class="auth-container">
        <div class="auth-logo">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 013 3m3 0a6 6 0 01-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1121.75 8.25z" />
            </svg>
        </div>

        <div class="auth-card">
            <h2>Lupa Password?</h2>
            <p class="auth-description">
                Jangan khawatir. Cukup masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang
                password Anda.
            </p>

            @if (session('status'))
                <div class="session-status">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="input-label">Alamat Email</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                width="20" height="20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </span>
                        <input id="email" class="text-input" type="email" name="email"
                            value="{{ old('email') }}" required autofocus>
                    </div>

                    @error('email')
                        <p class="input-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="primary-button">
                        Kirim Tautan Reset Password
                    </button>
                </div>
            </form>

            <div class="bottom-link">
                <a href="{{ route('login') }}">
                    Kembali ke Login
                </a>
            </div>
        </div>
    </div>
</body>

</html>
