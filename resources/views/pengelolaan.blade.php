@extends('layouts.app')

@section('title', 'Koleksi Buku – Perpustakaan Digital')

@section('style')
<style>
    .buku-card {
        border-radius: 12px;
        border: none;
        box-shadow: 0 2px 10px rgba(0,0,0,.08);
        transition: transform .2s, box-shadow .2s;
        height: 100%;
    }
    .buku-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0,0,0,.14);
    }
    .buku-cover {
        background: linear-gradient(135deg, #1a4731, #52b788);
        color: #fff;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.8rem;
        border-radius: 12px 12px 0 0;
    }
    .genre-badge {
        background: #e8f5e9;
        color: #1a4731;
        font-size: .75rem;
        padding: .2rem .6rem;
        border-radius: 20px;
        font-weight: 600;
    }
    .page-header-section {
        background: linear-gradient(135deg, #1a4731, #2d6a4f);
        color: #fff;
        border-radius: 14px;
        padding: 1.5rem 2rem;
        margin-bottom: 1.75rem;
    }
</style>
@endsection

@section('content')

    <div class="page-header-section d-flex align-items-center justify-content-between flex-wrap gap-2">
        <div>
            <h4 class="fw-bold mb-1"><i class="bi bi-collection me-2"></i>Koleksi Buku</h4>
            <p class="mb-0 opacity-85 small">Daftar seluruh koleksi buku perpustakaan</p>
        </div>
        <span class="badge bg-light text-dark fs-6 px-3 py-2">
            {{ count($buku) }} Judul Buku
        </span>
    </div>

    <div class="row g-3">
        @foreach($buku as $item)
        <div class="col-sm-6 col-lg-3">
            <div class="card buku-card">
                <div class="buku-cover">
                    <i class="bi bi-book"></i>
                </div>
                <div class="card-body d-flex flex-column">
                    <span class="genre-badge mb-2 align-self-start">{{ $item['genre'] }}</span>
                    <h6 class="fw-bold mb-1">{{ $item['judul'] }}</h6>
                    <p class="text-muted small mb-1">
                        <i class="bi bi-person me-1"></i>{{ $item['pengarang'] }}
                    </p>
                    <p class="text-muted small mb-auto">
                        <i class="bi bi-calendar me-1"></i>{{ $item['tahun'] }}
                    </p>
                    <hr class="my-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">Stok: <strong>{{ $item['stok'] }}</strong></small>
                        @if($item['tersedia'])
                            <span class="badge badge-tersedia rounded-pill px-2">
                                <i class="bi bi-check-circle me-1"></i>Tersedia
                            </span>
                        @else
                            <span class="badge badge-dipinjam rounded-pill px-2">
                                <i class="bi bi-x-circle me-1"></i>Habis
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

@endsection
