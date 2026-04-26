<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        :root {
            --hijau-tua:  #1a4731;
            --hijau-muda: #2d6a4f;
            --hijau-aksen:#52b788;
            --krem:       #f8f4e9;
            --teks-gelap: #212529;
        }

        body {
            background-color: var(--krem);
            font-family: 'Segoe UI', sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar-brand span { color: var(--hijau-aksen); }
        .navbar-custom {
            background: linear-gradient(135deg, var(--hijau-tua), var(--hijau-muda));
            box-shadow: 0 2px 8px rgba(0,0,0,.25);
        }
        .navbar-custom .nav-link { color: rgba(255,255,255,.85) !important; }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active { color: #fff !important; text-decoration: underline; }
        .navbar-custom .navbar-brand { color: #fff !important; font-weight: 700; font-size: 1.3rem; }
        .navbar-toggler { border-color: rgba(255,255,255,.5); }
        .navbar-toggler-icon { filter: invert(1); }

        /* Konten utama */
        main { flex: 1; padding: 2rem 0; }

        /* Footer */
        footer {
            background: var(--hijau-tua);
            color: rgba(255,255,255,.8);
            padding: 1.25rem 0;
            font-size: .875rem;
        }
        footer a { color: var(--hijau-aksen); text-decoration: none; }
        footer a:hover { text-decoration: underline; }

        /* Card */
        .card { border: none; border-radius: 12px; box-shadow: 0 2px 10px rgba(0,0,0,.08); }
        .card-header-custom {
            background: linear-gradient(135deg, var(--hijau-tua), var(--hijau-muda));
            color: #fff;
            border-radius: 12px 12px 0 0 !important;
            padding: 1rem 1.5rem;
        }

        /* Badge status */
        .badge-tersedia{ background-color:#d1fae5; color:#065f46; }
        .badge-dipinjam{ background-color:#fee2e2; color:#991b1b; }
        .badge-kembali{ background-color:#dbeafe; color:#1e40af; }
    </style>

    @yield('style')
</head>
<body>

    <x-navbar />

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <x-footer />

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('script')
</body>
</html>
