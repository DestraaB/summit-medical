<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-4 mb-4 text-center">
            <?php if (!empty($doctor->photo)) : ?>
                <img src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>" alt="Foto <?= htmlspecialchars($doctor->name); ?>" class="img-fluid rounded-circle shadow-sm mb-3 doctor-avatar" style="width: 250px; height: 250px; object-fit: cover;">
            <?php else : ?>
                <img src="https://ui-avatars.com/api/?name=<?= urlencode($doctor->name); ?>&background=random&color=fff&size=250" alt="Foto <?= htmlspecialchars($doctor->name); ?>" class="img-fluid rounded-circle shadow-sm mb-3 doctor-avatar" style="width: 250px; height: 250px;">
            <?php endif; ?>
        </div>
        
        <div class="col-md-8">
            <h2 class="text-primary" style="font-weight: 700;"><?= htmlspecialchars($doctor->name); ?></h2>
            <h5 class="text-secondary mb-4">
                <?= isset($doctor->specialty_name) ? htmlspecialchars($doctor->specialty_name) : 'Dokter Spesialis'; ?>
            </h5>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body p-4">
                    <h6 class="text-dark" style="font-weight: 600;"><i class="fas fa-graduation-cap text-primary me-2"></i> Riwayat Pendidikan</h6>
                    <p class="text-muted"><?= htmlspecialchars($doctor->education); ?></p>

                    <hr class="my-4">

                    <h6 class="text-dark" style="font-weight: 600;"><i class="fas fa-briefcase text-primary me-2"></i> Pengalaman Medis</h6>
                    <p class="text-muted"><?= htmlspecialchars($doctor->experience); ?></p>

                    <hr class="my-4">

                    <h6 class="text-dark" style="font-weight: 600;"><i class="fas fa-info-circle text-primary me-2"></i> Biografi Singkat</h6>
                    <p class="text-muted"><?= nl2br(htmlspecialchars($doctor->description)); ?></p>
                    
                    <hr class="my-4">
                    
                    <h6 class="text-dark" style="font-weight: 600;"><i class="fas fa-check-circle text-primary me-2"></i> Status Praktik</h6>
                    <?php if(strtolower($doctor->status) == 'aktif' || $doctor->status == 1): ?>
                        <span class="badge bg-success px-3 py-2 rounded-pill">Praktik Aktif</span>
                    <?php else: ?>
                        <span class="badge bg-danger px-3 py-2 rounded-pill">Tidak Aktif</span>
                    <?php endif; ?>
                </div>
            </div>

            <a href="<?= base_url('doctors'); ?>" class="btn btn-secondary rounded-pill px-4">
                <i class="fas fa-arrow-left me-2"></i> Kembali ke Daftar Dokter
            </a>
        </div>
    </div>
</div>