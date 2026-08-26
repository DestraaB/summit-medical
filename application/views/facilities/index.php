<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="h2 font-weight-bold text-primary">Fasilitas Kami</h1>
            <p class="text-muted">Fasilitas modern dan lengkap untuk menunjang kenyamanan serta kesembuhan pasien.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($facilities)) : ?>
            <?php foreach ($facilities as $facility) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3 custom-card">
                        <div class="card-body text-center">
                            <div class="text-primary mb-3">
                                <i class="fas fa-building fa-3x"></i>
                            </div>
                            <h5 class="card-title font-weight-bold"><?= htmlspecialchars($facility->name); ?></h5>
                            <p class="card-text text-muted"><?= htmlspecialchars($facility->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada data fasilitas.</p>
            </div>
        <?php endif; ?>
    </div>
</div>