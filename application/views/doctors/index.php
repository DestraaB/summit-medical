<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="h2 text-primary" style="font-weight: 700;">Jadwal & Profil Dokter</h1>
            <p class="text-muted">Temukan dokter spesialis terbaik untuk kebutuhan kesehatan Anda di Summit Medical Center.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($doctors)) : ?>
            <?php foreach ($doctors as $doctor) : ?>
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm border-0 custom-card text-center p-3">
                        <div class="mb-3">
                            <?php if (!empty($doctor->photo)) : ?>
                                <img src="<?= base_url('uploads/doctors/' . $doctor->photo); ?>" alt="Foto <?= htmlspecialchars($doctor->name); ?>" class="img-fluid rounded-circle doctor-avatar shadow-sm" style="width: 120px; height: 120px; object-fit: cover;">
                            <?php else : ?>
                                <img src="https://ui-avatars.com/api/?name=<?= urlencode($doctor->name); ?>&background=random&color=fff&size=120" alt="Foto Dokter" class="img-fluid rounded-circle doctor-avatar" style="width: 120px; height: 120px; object-fit: cover;">
                            <?php endif; ?>
                        </div>
                        <h5 class="card-title text-dark" style="font-weight: 600;"><?= htmlspecialchars($doctor->name); ?></h5>
                        <p class="card-text text-primary small mb-1">
                            <?= isset($doctor->specialty_name) ? htmlspecialchars($doctor->specialty_name) : 'Spesialis'; ?>
                        </p>
                        <p class="card-text text-muted small mb-3"><?= htmlspecialchars($doctor->education); ?></p>
                        <a href="<?= base_url('doctors/detail/' . $doctor->id); ?>" class="btn btn-outline-primary btn-sm rounded-pill mt-auto">Lihat Profil</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Data dokter belum tersedia.</p>
            </div>
        <?php endif; ?>
    </div>
</div>