@extends('layouts.app')

@section('title', 'Dashboard – Perpustakaan Digital')

@section('style')
<style>
    .stat-card {
        border-radius: 12px;
        border: none;
        box-shadow: 0 3px 12px rgba(0,0,0,.09);
        transition: transform .2s;
    }
    .stat-card:hover { transform: translateY(-4px); }
    .stat-icon {
        font-size: 2.5rem;
        line-height: 1;
        margin-bottom: .25rem;
    }
    .stat-nilai { font-size: 2rem; font-weight: 700; color: #1a4731; }
    .stat-label { font-size: .85rem; color: #6c757d; }
    .welcome-banner {
        background: linear-gradient(135deg, #1a4731, #52b788);
        color: #fff;
        border-radius: 14px;
        padding: 1.75rem 2rem;
        margin-bottom: 2rem;
    }
    .table thead th { background: #1a4731; color: #fff; border: none; }
</style>
@endsection

@section('content')
@include('partials.info-bar')

    <div class="welcome-banner d-flex align-items-center justify-content-between flex-wrap gap-3">
        <div>
            <h4 class="fw-bold mb-1">Halo, {{ $username }}!</h4>
            <p class="mb-0 opacity-85">Selamat datang di sistem perpustakaan. Berikut ringkasan hari ini.</p>
        </div>
        <div class="text-end">
            <small class="opacity-75">{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}</small>
        </div>
    </div>

    <div class="row g-3 mb-4">
        @foreach($statistik as $stat)
        <div class="col-6 col-md-3">
            <div class="card stat-card p-3 text-center h-100">
                <div class="stat-icon">{{ $stat['icon'] }}</div>
                <div class="stat-nilai">{{ $stat['nilai'] }}</div>
                <div class="stat-label">{{ $stat['label'] }}</div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="card">
        <div class="card-header card-header-custom d-flex align-items-center gap-2">
            <i class="bi bi-clock-history fs-5"></i>
            <span class="fw-semibold">Aktivitas Terbaru</span>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Anggota</th>
                            <th>Buku</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($aktivitas as $item)
                        <tr>
                            <td class="text-muted small">{{ $item['tanggal'] }}</td>
                            <td><i class="bi bi-person me-1 text-secondary"></i>{{ $item['anggota'] }}</td>
                            <td>{{ $item['buku'] }}</td>
                            <td>
                                @if($item['status'] === 'Dipinjam')
                                    <span class="badge badge-dipinjam px-2 py-1 rounded-pill">
                                        <i class="bi bi-arrow-up-right me-1"></i>{{ $item['status'] }}
                                    </span>
                                @else
                                    <span class="badge badge-kembali px-2 py-1 rounded-pill">
                                        <i class="bi bi-arrow-down-left me-1"></i>{{ $item['status'] }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
