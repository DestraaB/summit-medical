<section class="page-header">
    <div class="container">

        <span class="section-label">LAYANAN MEDIS</span>

        <h1>
            <?= htmlspecialchars($specialty->name); ?>
        </h1>

        <p>
            Informasi mengenai layanan spesialisasi
            Summit Medical.
        </p>

    </div>
</section>


<section class="specialty-detail-section">

    <div class="container">

        <div class="specialty-detail-card">

            <div class="specialty-detail-icon">

                <?php if (!empty($specialty->icon)): ?>

                    <i class="<?= htmlspecialchars($specialty->icon); ?>"></i>

                <?php else: ?>

                    <i class="fas fa-stethoscope"></i>

                <?php endif; ?>

            </div>


            <div class="specialty-detail-content">

                <span class="section-label">
                    SPESIALISASI
                </span>

                <h2>
                    <?= htmlspecialchars($specialty->name); ?>
                </h2>

                <?php if (!empty($specialty->description)): ?>

                    <p>
                        <?= nl2br(htmlspecialchars($specialty->description)); ?>
                    </p>

                <?php else: ?>

                    <p>
                        Informasi layanan untuk spesialisasi
                        ini belum tersedia.
                    </p>

                <?php endif; ?>


                <a
                    href="<?= site_url('specialties'); ?>"
                    class="specialty-back">

                    ← Kembali ke Spesialisasi

                </a>

            </div>

        </div>

    </div>

</section>