<section class="page-header">
    <div class="container">

        <span class="section-label">LAYANAN MEDIS</span>

        <h1>
            Spesialisasi
            <span>Kami</span>
        </h1>

        <p>
            Temukan berbagai layanan dan bidang spesialisasi
            yang tersedia di Summit Medical.
        </p>

    </div>
</section>


<section class="specialties-section">
    <div class="container">

        <div class="specialties-grid">

            <?php if (!empty($specialties)): ?>

                <?php foreach ($specialties as $specialty): ?>

                    <a
                        href="<?= site_url('specialties/detail/' . $specialty->id); ?>"
                        class="specialty-card">

                        <div class="specialty-icon">

                            <?php if (!empty($specialty->icon)): ?>

                                <i class="<?= htmlspecialchars($specialty->icon); ?>"></i>

                            <?php else: ?>

                                <i class="fas fa-stethoscope"></i>

                            <?php endif; ?>

                        </div>

                        <div class="specialty-info">

                            <h3>
                                <?= htmlspecialchars($specialty->name); ?>
                            </h3>

                            <?php if (!empty($specialty->description)): ?>

                                <p>
                                    <?= htmlspecialchars($specialty->description); ?>
                                </p>

                            <?php endif; ?>

                            <span class="specialty-link">
                                Lihat Selengkapnya →
                            </span>

                        </div>

                    </a>

                <?php endforeach; ?>

            <?php else: ?>

                <div class="specialty-empty">
                    <p>
                        Data spesialisasi belum tersedia.
                    </p>
                </div>

            <?php endif; ?>

        </div>

    </div>
</section>