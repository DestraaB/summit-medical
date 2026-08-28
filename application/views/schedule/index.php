<div class="container py-5 my-5">
    <div class="text-center mb-5">
        <h6 class="text-primary fw-bold text-uppercase">Informasi Layanan</h6>
        <h1 class="display-5 fw-bold text-dark">Jadwal Praktik Dokter</h1>
        <p class="text-muted">Temukan jadwal praktik dokter spesialis kami dan rencanakan kunjungan Anda.</p>
    </div>

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0 align-middle">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="py-3 px-4">Nama Dokter</th>
                            <th class="py-3 px-4">Hari Praktik</th>
                            <th class="py-3 px-4">Jam Praktik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(!empty($schedules)): ?>
                            <?php foreach($schedules as $s): ?>
                            <tr>
                                <td class="py-3 px-4 fw-bold text-dark">
                                    <i class="fas fa-user-md text-primary me-2"></i> <?= htmlspecialchars($s->doctor_name); ?>
                                </td>
                                <td class="py-3 px-4">
                                    <span class="badge bg-info text-dark rounded-pill px-3 py-2"><?= htmlspecialchars($s->day); ?></span>
                                </td>
                                <td class="py-3 px-4 fw-semibold text-secondary">
                                    <i class="far fa-clock me-1"></i> <?= date('H:i', strtotime($s->start_time)); ?> - <?= date('H:i', strtotime($s->end_time)); ?> WIB
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3" class="text-center py-5 text-muted">Belum ada jadwal praktik yang tersedia saat ini.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>