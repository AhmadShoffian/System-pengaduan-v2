<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Reset Password') }} - {{ config('app.name', 'Laravel') }}</title>

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
                    d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.286zm0 13.036h.008v.008h-.008v-.008z" />
            </svg>
        </div>

        <div class="auth-card">
            <h2>Atur Ulang Password Anda</h2>
            <p class="auth-description">
                Silakan masukkan password baru Anda di bawah ini.
            </p>

            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">

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
                            value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                    </div>
                    @error('email')
                        <p class="input-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="input-label">Password Baru</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                width="20" height="20">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input id="password" class="text-input" type="password" name="password" required
                            autocomplete="new-password">
                    </div>
                    @error('password')
                        <p class="input-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="input-label">Konfirmasi Password Baru</label>
                    <div class="input-wrapper">
                        <span class="input-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                width="20" height="20">
                                <path fill-rule="evenodd"
                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input id="password_confirmation" class="text-input" type="password"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>
                    @error('password_confirmation')
                        <p class="input-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="primary-button">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
