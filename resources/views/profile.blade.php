@extends('layouts.app')

@section('title', 'Profil – Perpustakaan Digital')

@section('style')
<style>
    .avatar-circle {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, #1a4731, #52b788);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.5rem;
        color: #fff;
        margin: 0 auto 1rem;
    }
    .info-row { padding: .6rem 0; border-bottom: 1px solid #f0ece0; }
    .info-row:last-child { border-bottom: none; }
    .info-label { font-size: .8rem; color: #6c757d; text-transform: uppercase; letter-spacing: .05em; }
    .info-value { font-weight: 600; color: #212529; }
    .riwayat-item {
        display: flex;
        gap: 1rem;
        padding: .75rem 0;
        border-bottom: 1px solid #f0ece0;
    }
    .riwayat-item:last-child { border-bottom: none; }
    .riwayat-dot {
        width: 10px;
        height: 10px;
        background: #52b788;
        border-radius: 50%;
        margin-top: 5px;
        flex-shrink: 0;
    }
</style>
@endsection

@section('content')

<div class="row g-4">

    <div class="col-md-4">
        <div class="card h-100">
            <div class="card-header card-header-custom text-center">
                <i class="bi bi-person-badge fs-5 me-2"></i>Profil Petugas
            </div>
            <div class="card-body text-center pt-3">
                <div class="avatar-circle">
                    <i class="bi bi-person-fill"></i>
                </div>
                <h5 class="fw-bold mb-0">{{ $username }}</h5>
                <span class="badge" style="background:#d1fae5;color:#065f46;">
                    {{ $profil['jabatan'] }}
                </span>

                <hr>

                <div class="text-start">
                    @foreach([
                        ['bi-envelope','Email',$profil['email']],
                        ['bi-telephone','Telepon',$profil['telepon']],
                        ['bi-geo-alt','Alamat',$profil['alamat']],
                        ['bi-calendar2-check','Bergabung',$profil['bergabung']],
                    ] as [$ikon, $label, $nilai])
                    <div class="info-row">
                        <div class="info-label">
                            <i class="bi {{ $ikon }} me-1"></i>{{ $label }}
                        </div>
                        <div class="info-value">{{ $nilai }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card h-100">
            <div class="card-header card-header-custom d-flex align-items-center gap-2">
                <i class="bi bi-journal-text fs-5"></i>
                <span class="fw-semibold">Riwayat Aktivitas</span>
            </div>
            <div class="card-body">
                <p class="text-muted small mb-3">
                    Aktivitas terbaru yang dilakukan oleh <strong>{{ $username }}</strong>
                </p>

                @foreach($riwayat as $item)
                <div class="riwayat-item">
                    <div class="riwayat-dot mt-1"></div>
                    <div>
                        <div class="fw-semibold small">{{ $item['aksi'] }}</div>
                        <div class="text-muted" style="font-size:.78rem;">
                            <i class="bi bi-clock me-1"></i>{{ $item['tanggal'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>

@endsection
