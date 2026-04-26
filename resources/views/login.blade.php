<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login &mdash; Perpustakaan Digital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --hijau-tua:  #1a4731;
            --hijau-muda: #2d6a4f;
            --hijau-aksen:#52b788;
            --krem:       #f8f4e9;
        }
        body {
            background: linear-gradient(135deg, var(--hijau-tua) 0%, var(--hijau-muda) 60%, var(--hijau-aksen) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-wrapper {
            width: 100%;
            max-width: 420px;
            padding: 1rem;
        }
        .login-card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 16px 48px rgba(0,0,0,.25);
            overflow: hidden;
        }
        .login-header {
            background: linear-gradient(135deg, var(--hijau-tua), var(--hijau-muda));
            color: #fff;
            text-align: center;
            padding: 2rem 1.5rem 1.5rem;
        }
        .login-header .logo-icon {
            font-size: 3rem;
            display: block;
            margin-bottom: .5rem;
        }
        .login-body { padding: 2rem; }
        .btn-login {
            background: linear-gradient(135deg, var(--hijau-tua), var(--hijau-muda));
            border: none;
            color: #fff;
            width: 100%;
            padding: .75rem;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            transition: opacity .2s;
        }
        .btn-login:hover { opacity: .88; color: #fff; }
        .form-control:focus {
            border-color: var(--hijau-aksen);
            box-shadow: 0 0 0 .2rem rgba(82,183,136,.25);
        }
        .input-group-text {
            background: var(--krem);
            border-color: #dee2e6;
            color: var(--hijau-tua);
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-header">
                <span class="logo-icon"><i class="bi bi-book-half"></i></span>
                <h4 class="fw-bold mb-0">Perpustakaan Digital</h4>
                <small class="opacity-75">Sistem Manajemen Perpustakaan</small>
            </div>
            <div class="login-body">
                <h5 class="fw-semibold mb-1">Selamat Datang!</h5>
                <p class="text-muted small mb-4">Silakan masuk untuk melanjutkan.</p>

                <form action="{{ route('login.proses') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Username</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input
                                type="text"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan username"
                                value="{{ old('username') }}"
                                required
                            >
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required
                            >
                        </div>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="bi bi-box-arrow-in-right me-2"></i>Masuk
                    </button>
                </form>

                <p class="text-center text-muted small mt-4 mb-0">
                    &copy;{{ date('Y') }} Perpustakaan Digital
                </p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
