<div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4 px-3 py-2 rounded-3"
     style="background:#e9f5ee; border-left: 4px solid #2d6a4f;">
    <div class="d-flex align-items-center gap-3 flex-wrap">
        <span class="text-success fw-semibold small">
            <i class="bi bi-bookmark-check-fill me-1"></i>Sistem aktif
        </span>
        <span class="text-muted small">
            <i class="bi bi-book me-1"></i>120 buku terdaftar
        </span>
        <span class="text-muted small">
            <i class="bi bi-people me-1"></i>48 anggota aktif
        </span>
    </div>
    <span class="text-muted small">
        <i class="bi bi-clock me-1"></i>{{ \Carbon\Carbon::now()->format('H:i') }} WIB
    </span>
</div>
