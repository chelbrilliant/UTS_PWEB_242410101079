<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //halaman login
    public function login()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        session(['username' => $username]);

        return redirect()->route('dashboard');
    }

    //dashboard
    public function dashboard(Request $request)
    {
        $username = session('username', 'Tamu');

        $statistik = [
            ['label' => 'Total Buku', 'nilai' => 120, 'icon' => '📚'],
            ['label' => 'Buku Dipinjam','nilai' => 35, 'icon' => '📖'],
            ['label' => 'Buku Tersedia', 'nilai' => 85, 'icon' => '✅'],
            ['label' => 'Total Anggota', 'nilai' => 48, 'icon' => '👥'],
        ];

        //Aktivitas terbaru
        $aktivitas = [
            ['tanggal' => '23 Apr 2026', 'anggota' => 'Budi Santoso', 'buku' => 'Laskar Pelangi', 'status' => 'Dipinjam'],
            ['tanggal' => '22 Apr 2026', 'anggota' => 'Siti Rahayu', 'buku' => 'Bumi Manusia', 'status' => 'Dikembalikan'],
            ['tanggal' => '21 Apr 2026', 'anggota' => 'Ahmad Fauzi', 'buku' => 'Harry Potter', 'status' => 'Dipinjam'],
            ['tanggal' => '20 Apr 2026', 'anggota' => 'Dewi Lestari', 'buku' => 'Negeri 5 Menara', 'status' => 'Dikembalikan'],
            ['tanggal' => '19 Apr 2026', 'anggota' => 'Rizky Pratama', 'buku' => 'Sang Pemimpi', 'status' => 'Dipinjam'],
        ];

        return view('dashboard', compact('username', 'statistik', 'aktivitas'));
    }

    //pengelolaan buku
    public function pengelolaan()
    {
        $username = session('username', 'Tamu');

        $buku = [
            [
                'id'        => 1,
                'judul'     => 'Laskar Pelangi',
                'pengarang' => 'Andrea Hirata',
                'genre'     => 'Novel',
                'tahun'     => 2005,
                'stok'      => 3,
                'tersedia'  => true,
            ],
            [
                'id'        => 2,
                'judul'     => 'Bumi Manusia',
                'pengarang' => 'Pramoedya Ananta Toer',
                'genre'     => 'Novel Sejarah',
                'tahun'     => 1980,
                'stok'      => 2,
                'tersedia'  => false,
            ],
            [
                'id'        => 3,
                'judul'     => 'Negeri 5 Menara',
                'pengarang' => 'Ahmad Fuadi',
                'genre'     => 'Novel',
                'tahun'     => 2009,
                'stok'      => 4,
                'tersedia'  => true,
            ],
            [
                'id'        => 4,
                'judul'     => 'Sang Pemimpi',
                'pengarang' => 'Andrea Hirata',
                'genre'     => 'Novel',
                'tahun'     => 2006,
                'stok'      => 2,
                'tersedia'  => true,
            ],
            [
                'id'        => 5,
                'judul'     => 'Filosofi Teras',
                'pengarang' => 'Henry Manampiring',
                'genre'     => 'Non-Fiksi',
                'tahun'     => 2018,
                'stok'      => 3,
                'tersedia'  => true,
            ],
            [
                'id'        => 6,
                'judul'     => 'Atomic Habits',
                'pengarang' => 'James Clear',
                'genre'     => 'Self-Help',
                'tahun'     => 2018,
                'stok'      => 1,
                'tersedia'  => false,
            ],
            [
                'id'        => 7,
                'judul'     => 'The Alchemist',
                'pengarang' => 'Paulo Coelho',
                'genre'     => 'Novel',
                'tahun'     => 1988,
                'stok'      => 2,
                'tersedia'  => true,
            ],
            [
                'id'        => 8,
                'judul'     => 'Dilan 1990',
                'pengarang' => 'Pidi Baiq',
                'genre'     => 'Novel Romance',
                'tahun'     => 2014,
                'stok'      => 5,
                'tersedia'  => true,
            ],
        ];

        return view('pengelolaan', compact('username', 'buku'));
    }

    //profil
    public function profile()
    {
        $username = session('username', 'Tamu');

        $profil = [
            'nama'     => $username,
            'jabatan'  => 'Petugas Perpustakaan',
            'email'    => strtolower(str_replace(' ', '.', $username)) . '@perpustakaan.id',
            'telepon'  => '0812-3456-7890',
            'alamat'   => 'Jl. Kalimantan No. 10, Jember',
            'bergabung'=> 'Januari 2024',
        ];

        $riwayat = [
            ['tanggal' => '23 Apr 2026', 'aksi' => 'Menambahkan buku baru: Atomic Habits'],
            ['tanggal' => '22 Apr 2026', 'aksi' => 'Memproses peminjaman buku Laskar Pelangi'],
            ['tanggal' => '21 Apr 2026', 'aksi' => 'Memperbarui stok buku Bumi Manusia'],
            ['tanggal' => '20 Apr 2026', 'aksi' => 'Mendaftarkan anggota baru: Rizky Pratama'],
            ['tanggal' => '18 Apr 2026', 'aksi' => 'Memproses pengembalian buku Negeri 5 Menara'],
        ];

        return view('profile', compact('username', 'profil', 'riwayat'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
