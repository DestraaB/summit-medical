<div class="container mt-5 mb-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="h2 font-weight-bold text-primary">Layanan Medis Kami</h1>
            <p class="text-muted">Summit Medical Center menyediakan fasilitas dan layanan kesehatan komprehensif.</p>
        </div>
    </div>

    <div class="row">
        <?php if (!empty($services)) : ?>
            <?php foreach ($services as $service) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm border-0 p-3">
                        <div class="card-body">
                            <div class="text-primary mb-3">
                                <i class="fas fa-hospital-alt fa-2x"></i>
                            </div>
                            <h5 class="card-title font-weight-bold"><?= htmlspecialchars($service->name); ?></h5>
                            <p class="card-text text-muted"><?= htmlspecialchars($service->description); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada data layanan.</p>
            </div>
        <?php endif; ?>
    </div>
</div>